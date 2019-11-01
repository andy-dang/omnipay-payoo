<?php
/**
 * Created by PhpStorm.
 * User: andydang
 * Date: 11/1/19
 * Time: 10:02 AM
 */

namespace Omnipay\Payoo\Message;


use Omnipay\Common\Message\AbstractResponse;

class PurchaseResponse extends AbstractResponse
{
    public function isRedirect()
    {
        $data = $this->getData();
        return !empty($data['payment_url']);
    }
    public function isSuccessful()
    {
        return false;
    }
    public function getRedirectUrl()
    {
        $data = $this->getData();
        return $data['payment_url'];
    }
    public function getRedirectMethod()
    {
        return 'GET';
    }
    public function getRedirectData()
    {
        return null;
    }
    public function redirect()
    {
        return $this->getRedirectUrl();
    }

}