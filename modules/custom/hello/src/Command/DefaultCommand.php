<?php

namespace Drupal\hello\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Drupal\Console\Core\Command\Command;
use Drupal\Console\Core\Style\DrupalStyle;
use Drupal\Console\Annotations\DrupalCommand;

/**
 * Class DefaultCommand.
 *
 * @DrupalCommand (
 *     extension="hello",
 *     extensionType="module"
 * )
 */
class DefaultCommand extends Command {

  /**
   * {@inheritdoc}
   */
  protected function configure() {
    $this
      ->setName('kadour')
      ->setDescription($this->trans('commands.kadour.description'));
  }

  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output) {
    $io = new DrupalStyle($input, $output);

    $b='Saint' ; 
        $query = \Drupal::database()->select('villes_france_free', 'emp');
    $result = $query->fields('emp', ['ville_nom_reel'])
           ->condition('ville_nom_reel', '%' . db_like($b) . '%', 'LIKE')
          ->distinct()
          ->range(0, 10)
          ->execute();

          print_r($result->fetchAllObject()) ; 
    $io->info($this->trans('commands.kadour.messages.success'));
  }

 /**
  * {@inheritdoc}
  */
 protected function interact(InputInterface $input, OutputInterface $output) {
   $io = new DrupalStyle($input, $output);

 }

}
