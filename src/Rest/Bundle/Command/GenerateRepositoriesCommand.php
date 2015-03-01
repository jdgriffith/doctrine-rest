<?php
  /*
   * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
   * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
   * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
   * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
   * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
   * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
   * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
   * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
   * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
   * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
   * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
   *
   * This software consists of voluntary contributions made by many individuals
   * and is licensed under the MIT license. For more information, see
   * <http://www.doctrine-project.org>.
   */

  namespace Rest\Bundle\Command;

  use Symfony\Component\Console\Input\InputArgument;
  use Symfony\Component\Console\Input\InputOption;
  use Doctrine\ORM\Tools\Console\MetadataFilter;
  use Doctrine\ORM\Tools\EntityRepositoryGenerator;
  use Symfony\Component\Console\Output\OutputInterface;
  use Symfony\Component\Console\Input\InputInterface;
  use Symfony\Component\Console\Command\Command;
  use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
  use Doctrine\Common\Persistence\Mapping\ClassMetadata;
  use Doctrine\Bundle\DoctrineBundle\Mapping\DisconnectedMetadataFactory;

  /**
   * Command to generate repository classes for mapping information.
   *
   * @link    www.doctrine-project.org
   * @since   2.0
   * @author  Benjamin Eberlei <kontakt@beberlei.de>
   * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
   * @author  Jonathan Wage <jonwage@gmail.com>
   * @author  Roman Borschel <roman@code-factory.org>
   */
  class GenerateRepositoriesCommand extends ContainerAwareCommand
  {
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
      $this
        ->setName('orm:generate:repositories')
        ->setDescription('Generate repository classes from your mapping information.')
        ->setDefinition(array(
          new InputOption(
            'filter', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
            'A string pattern used to match entities that should be processed.'
          ),
          new InputArgument(
            'bundle', InputArgument::REQUIRED, 'The bundle to generate your repository classes.'
          )
        ))
        ->setHelp(<<<EOT
Generate repository classes from your mapping information.
EOT
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $em = $this->getContainer()->get('doctrine')->getManager();
      $manager = new DisconnectedMetadataFactory($this->getContainer()->get('doctrine'));

      $metadatas = $em->getMetadataFactory()->getAllMetadata();
      $metadatas = MetadataFilter::filter($metadatas, $input->getOption('filter'));

      // Process destination directory
      $bundle = $this->getApplication()->getKernel()->getBundle($input->getArgument('bundle'));

      if (count($metadatas)) {
        $numRepositories = 0;
        $generator = new EntityRepositoryGenerator();

        foreach ($metadatas as $metadata) {

          // Get the simple name of the Entity
          $name = preg_replace("|^(.*\\\)|", "", $metadata->getName());

          // Get path to original entity
          $entityPath = $manager->getClassMetadata($metadata->getName(), null)->getPath() . "/" .  preg_replace
            ("/\\\/", "/", $metadata->getName()) . ".php";
          $repositoryPath = $bundle->getPath() . "/Repository/" . $name . "Repository.php";

          $metadata->setCustomRepositoryClass($bundle->getNamespace() . "\\Repository\\" . $name . "Repository");

          // notify entity via annotations to use custom repository class
          $this->_addEntityAnnotation($entityPath, $metadata->customRepositoryClassName);

          if ($metadata->customRepositoryClassName AND !$this->_repositoryClassExists($repositoryPath)) {

            $output->writeln(
              sprintf('Processing repository "<info>%s</info>"', $metadata->customRepositoryClassName)
            );

            $generator->writeEntityRepositoryClass($metadata->customRepositoryClassName, "./src/");

            $numRepositories++;

          }
        }

        if ($numRepositories) {
          // Outputting information message
          $output->writeln(PHP_EOL . sprintf('Repository classes generated to "<info>%s</INFO>"',
              $bundle->getPath() . "/Repository/") );
        } else {
          $output->writeln('No Repository classes were found to be processed.' );
        }
      } else {
        $output->writeln('No Metadata Classes to process.' );
      }

    }

    private function _addEntityAnnotation($entityPath, $name) {

      $contents = file_get_contents($entityPath);
      $contents = preg_replace(["/(@ORM\\\Entity)\((.*)\)(.*)\n/m", "/(@ORM\\\Entity)(.*)\n/m"],
        "$1(repositoryClass=\"$name\")\n",
        $contents);
      file_put_contents($entityPath, $contents);

    }

    private function _repositoryClassExists($path) {

      if (file_exists($path)) {
        return true;
      }

      return false;

    }

  }
