<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\AbstractRequest;

class SubscriptionRequest extends AbstractRequest
{
    /**
     * Send the purchase request
     *
     * @param array $data
     * @return SubscriptionResponse
     */
    public function sendData($data = []): SubscriptionResponse
    {
        return $this->response = new SubscriptionResponse($this, $this->getResponseData());
    }

    public function getResponseData(): array
    {
        return [];
    }

    /**
     * Get the agreement name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getParameter('name');
    }

    /**
     * Set the agreement name
     *
     * @param string $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setName($value): SubscriptionRequest
    {
        return $this->setParameter('name', $value);
    }

    /**
     * Get the plan ID
     *
     * @return string
     */
    public function getPlanId(): string
    {
        return $this->getParameter('planId');
    }

    /**
     * Set the plan ID
     *
     * @param string $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setPlanId($value): SubscriptionRequest
    {
        return $this->setParameter('planId', $value);
    }

    /**
     * Get the agreement start date
     *
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->getParameter('startDate');
    }

    /**
     * Set the agreement start date
     *
     * @param \DateTime $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setStartDate(\DateTime $value): SubscriptionRequest
    {
        return $this->setParameter('startDate', $value);
    }

    /**
     * Get the agreement details
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @return array
     * @link https://developer.paypal.com/docs/api/#agreementdetails-object
     */
    public function getAgreementDetails(): array
    {
        return $this->getParameter('agreementDetails');
    }

    /**
     * Set the agreement details
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @param array $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     * @link https://developer.paypal.com/docs/api/#agreementdetails-object
     */
    public function setAgreementDetails(array $value): SubscriptionRequest
    {
        return $this->setParameter('agreementDetails', $value);
    }

    /**
     * Get the payer details
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @return array
     * @link https://developer.paypal.com/docs/api/#payer-object
     */
    public function getPayerDetails(): array
    {
        return $this->getParameter('payerDetails');
    }

    /**
     * Set the payer details
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @param array $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     * @link https://developer.paypal.com/docs/api/#payer-object
     */
    public function setPayerDetails(array $value): SubscriptionRequest
    {
        return $this->setParameter('payerDetails', $value);
    }

    /**
     * Get the shipping address
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @return array
     * @link https://developer.paypal.com/docs/api/#address-object
     */
    public function getShippingAddress(): array
    {
        return $this->getParameter('shippingAddress');
    }

    /**
     * Set the shipping address
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @param array $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     * @link https://developer.paypal.com/docs/api/#address-object
     */
    public function setShippingAddress(array $value): SubscriptionRequest
    {
        return $this->setParameter('shippingAddress', $value);
    }

    /**
     * Get preferences to override the plan merchant preferences
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
     * Set preferences to override the plan merchant preferences
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @param array $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     * @link https://developer.paypal.com/docs/api/#merchantpreferences-object
     */
    public function setMerchantPreferences(array $value): SubscriptionRequest
    {
        return $this->setParameter('merchantPreferences', $value);
    }

    /**
     * Get charge model to override the plan charge model
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @return array
     * @link https://developer.paypal.com/docs/api/#overridechargemodel-object
     */
    public function getChargeModel(): array
    {
        return $this->getParameter('chargeModel');
    }

    /**
     * Set preferences to override the plan merchant preferences
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @param array $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     * @link https://developer.paypal.com/docs/api/#merchantpreferences-object
     */
    public function setChargeModel(array $value): SubscriptionRequest
    {
        return $this->setParameter('chargeModel', $value);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        $this->validate('name', 'description', 'startDate', 'payerDetails', 'planId');
        $data = [
            'name'                          => $this->getName(),
            'description'                   => $this->getDescription(),
            'start_date'                    => $this->getStartDate()->format('c'),
            'agreement_details'             => $this->getAgreementDetails(),
            'payer'                         => $this->getPayerDetails(),
            'plan'                          => [
                'id' => $this->getPlanId(),
            ],
            'shipping_address'              => $this->getShippingAddress(),
            'override_merchant_preferences' => $this->getMerchantPreferences(),
            'override_charge_models'        => $this->getChargeModel(),
        ];

        return $data;
    }
}
