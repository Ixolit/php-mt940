<?php
namespace Kingsquare\Banking;

/**
 * @property string rawData A container after parsing a statement containing 'rawdata' if debug was true on the engine
 *
 * @package Kingsquare\Banking
 * @author Kingsquare (source@kingsquare.nl)
 * @license http://opensource.org/licenses/MIT MIT
 */
class Transaction
{
    const DEBIT = 'D';
    const CREDIT = 'C';

    private $account = '';
    private $accountName = '';
    private $price = 0.0;
    private $debitcredit = '';
    private $description = '';
    private $valueTimestamp = 0;
    private $entryTimestamp = 0;
    private $transactionCode = '';
    private $eRef = ''; // electronic ref
    private $marf = ''; // mandate ref
    private $pRef = ''; // payment info id sdd
    private $rtrn = ''; // return reason dd

    /**
     * @param string $var
     */
    public function setAccount($var)
    {
        $this->account = (string) $var;
    }

    /**
     * @param string $var
     */
    public function setAccountName($var)
    {
        $this->accountName = (string) $var;
    }

    /**
     * @param float $var
     */
    public function setPrice($var)
    {
        $this->price = (float) $var;
    }

    /**
     * @param string $var
     */
    public function setDebitCredit($var)
    {
        $this->debitcredit = (string) $var;
    }

    /**
     * @param string $var
     */
    public function setDescription($var)
    {
        $this->description = (string) $var;
    }

    /**
     * @param int $var
     */
    public function setValueTimestamp($var)
    {
        $this->valueTimestamp = (int) $var;
    }

    /**
     * @param int $var
     */
    public function setEntryTimestamp($var)
    {
        $this->entryTimestamp = (int) $var;
    }

    /**
     * @param string $var
     */
    public function setTransactionCode($var)
    {
        $this->transactionCode = (string) $var;
    }

    /**
     * @param string $eRef
     */
    public function setERef($eRef) {
        $this->eRef = $eRef;
    }

    /**
     * @param string $marf
     */
    public function setMarf($marf) {
        $this->marf = $marf;
    }

    /**
     * @return string
     */
    public function getPRef() {
        return $this->pRef;
    }

    /**
     * @param string $pRef
     */
    public function setPRef($pRef) {
        $this->pRef = $pRef;
    }

    /**
     * @return string
     */
    public function getRtrn() {
        return $this->rtrn;
    }

    /**
     * @param string $rtrn
     */
    public function setRtrn($rtrn) {
        $this->rtrn = $rtrn;
    }

    // getters
    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getDebitCredit()
    {
        return $this->debitcredit;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $format
     *
     * @return string
     */
    public function getValueTimestamp($format = 'U')
    {
        return date($format, $this->valueTimestamp);
    }

    /**
     * @param string $format
     *
     * @return string
     */
    public function getEntryTimestamp($format = 'U')
    {
        return date($format, $this->entryTimestamp);
    }

    /**
     * @return string
     */
    public function getTransactionCode()
    {
        return $this->transactionCode;
    }

    /**
     * @return string
     */
    public function getERef() {
        return $this->eRef;
    }

    /**
     * @return string
     */
    public function getMarf() {
        return $this->marf;
    }

    /**
     * @return bool
     */
    public function isDebit()
    {
        return ($this->getDebitCredit() == self::DEBIT);
    }

    /**
     * @return bool
     */
    public function isCredit()
    {
        return ($this->getDebitCredit() == self::CREDIT);
    }
}
