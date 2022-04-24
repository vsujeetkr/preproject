<?php

namespace Drupal\mortgage_calculator\Controller;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\State\StateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for MortgageCalculatorController routes.
 */
class MortgageCalculatorController extends ControllerBase {

  /**
   * The state object.
   *
   * @var \Drupal\Core\State\StateInterface
   */
  protected $state;

  /**
   * Constructs a \Drupal\aggregator\Controller\AggregatorController object.
   *
   * @param \Drupal\Core\State\StateInterface $state
   *   The state object.
   */
  public function __construct(StateInterface $state) {
    $this->state = $state;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('state')
    );
  }

  /**
   * Prints a page listing a glossary of Drupal terminology.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match.
   *
   * @return array
   *   An HTML string representing the calculation results page.
   */
  public function mortgageCalculatorPage(Request $request, RouteMatchInterface $route_match) {

    $form = $this->formBuilder()->getForm('Drupal\mortgage_calculator\Form\MortgageCalculatorForm');

    $session = $request->getSession();
    $loan_amount = $session->get('mortgage_calculator_loan_amount', '');
    $mortgage_rate = $session->get('mortgage_calculator_mortgage_rate', '');
    $years_to_pay = $session->get('mortgage_calculator_years_to_pay', '');
    $desired_display = $this->state->get('mortgage_calculator_desired_display');

    return [
      '#theme' => 'mortgage_calculator',
      '#mortgage_calculator_form' => $form,
      '#loan_amount' => $loan_amount ? $loan_amount : '30000',
      '#mortgage_rate' => $mortgage_rate ? $mortgage_rate : '3',
      '#years_to_pay' => $years_to_pay ? $years_to_pay : 30,
      '#desired_display' => $desired_display,
    ];

  }

}
