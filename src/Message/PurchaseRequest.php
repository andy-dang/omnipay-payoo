<?php
/**
 * Created by PhpStorm.
 * User: andydang
 * Date: 11/1/19
 * Time: 10:02 AM
 */

namespace Omnipay\Payoo\Message;


use Cake\Chronos\Chronos;
use Omnipay\Common\Exception\InvalidRequestException;
use Symfony\Component\HttpFoundation\ParameterBag;

class PurchaseRequest extends AbstractRequest
{
    const RULE_DES_MIN_LENGTH = 50;

    const TIME_ZONE = 'Asia/Ho_Chi_Minh';

    public function initialize(array $parameters = array())
    {
        if (null !== $this->response) {
            throw new \RuntimeException('Request cannot be modified after it has been sent!');
        }
        $this->parameters = new ParameterBag;
        foreach ($parameters as $k => $v) {
            $this->parameters->set($k, $v);
        }
        return $this;
    }

    public function getData()
    {
        $this->validate('result', 'checksum', 'order');
        $params = $this->parameters->get('order');

        if (empty($params['payment_url'])) {
            throw new \RuntimeException('The payment_url that pre-purchase responded is empty, check your parameters!');
        }
        return $params;
    }
    public function sendData($data)
    {
        return new PurchaseResponse($this, $data);
    }


}