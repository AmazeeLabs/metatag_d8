<?php

/**
 * @file
 * Contains Drupal\metatag\Command\GenerateTagCommand.
 */

namespace Drupal\metatag\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Drupal\AppConsole\Command\ContainerAwareCommand;

/**
 * Class GenerateTag.
 *
 * @package Drupal\metatag
 */
class GenerateTagCommand extends ContainerAwareCommand {
  /**
   * {@inheritdoc}
   */
  protected function configure() {
    $this
      ->setName('generate:metatag:tag')
      ->setDescription($this->trans('command.metatag.generate.tag.description'))
      ->addArgument('name', InputArgument::OPTIONAL, $this->trans('command.metatag.generate.tag.arguments.name'))
      ->addOption('yell', NULL, InputOption::VALUE_NONE, $this->trans('command.metatag.generate.tag.options.yell'));
  }

  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output) {
    $name = $input->getArgument('name');
    if ($name) {
      $text = 'Hello ' . $name;
    }
    else {
      $text = 'Hello';
    }

    $text = sprintf(
      '%s, %s: %s',
      $text,
      'I am a new generated command for the module',
      $this->getModule()
    );

    if ($input->getOption('yell')) {
      $text = strtoupper($text);
    }

    $output->writeln($text);
  }

}
