<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\AbstractRequest;

class SubscriptionPlanRequest extends AbstractRequest
{
    /**
     * Send the 'create subscription plan' request
     *
     * @param array $data
     * @return SubscriptionPlanResponse
     */
    public function sendData($data = []): SubscriptionPlanResponse
    {
        return $this->response = new SubscriptionPlanResponse($this, $this->getResponseData());
    }

    public function getResponseData(): array
    {
        return [];
    }

    /**
     * Get the purchase parameters
     *
     * @return array
     */
    public function getData(): array
    {
        $this->validate('name', 'description', 'type');
        $data = [
            'name'                 => $this->getName(),
            'description'          => $this->getDescription(),
            'type'                 => $this->getType(),
            'payment_definitions'  => $this->getPaymentDefinitions(),
            'merchant_preferences' => $this->getMerchantPreferences(),
        ];

        return $data;
    }

    /**
     * Get the plan name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getParameter('name');
    }

    /**
     * Set the plan name
     *
     * @param string $value
     * @return SubscriptionPlanRequest|AbstractRequest provides a fluent interface.
     */
    public function setName($value): SubscriptionPlanRequest
    {
        return $this->setParameter('name', $value);
    }

    /**
     * Get the plan type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->getParameter('type');
    }

    /**
     * Set the plan type
     *
     * @param string $value either RestGateway::BILLING_PLAN_TYPE_FIXED
     *                      or RestGateway::BILLING_PLAN_TYPE_INFINITE
     * @return SubscriptionPlanRequest|AbstractRequest provides a fluent interface.
     */
    public function setType($value): SubscriptionPlanRequest
    {
        return $this->setParameter('type', $value);
    }

    /**
     * Get the plan payment definitions
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @return array
     * @link https://developer.paypal.com/docs/api/#paymentdefinition-object
     */
    public function getPaymentDefinitions(): array
    {
        return $this->getParameter('paymentDefinitions');
    }

    /**
     * Set the plan payment definitions
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @param array $value
     * @return SubscriptionPlanRequest|AbstractRequest provides a fluent interface.
     * @link https://developer.paypal.com/docs/api/#paymentdefinition-object
     */
    public function setPaymentDefinitions(array $value): SubscriptionPlanRequest
    {
        return $this->setParameter('paymentDefinitions', $value);
    }

    /**
     * Get the plan merchant preferences
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @return array
     * @link https://developer.paypal.com/docs/api/#merchantpreferences-object
     */
    public function getMerchantPreferences(): array
    {
        return $this->getParameter('merchantPreferences');
    }

    /**
     * Set the plan merchant preferences
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @param array $value
     * @return SubscriptionPlanRequest|AbstractRequest provides a fluent interface.
     * @link https://developer.paypal.com/docs/api/#merchantpreferences-object
     */
    public function setMerchantPreferences(array $value): SubscriptionPlanRequest
    {
        return $this->setParameter('merchantPreferences', $value);
    }
}
