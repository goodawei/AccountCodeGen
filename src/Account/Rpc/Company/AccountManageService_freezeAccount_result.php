<?php
namespace Account\Rpc\Company;
/**
 * Autogenerated by Thrift Compiler (0.11.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;
use JsonSerializable;
use stdClass;


class AccountManageService_freezeAccount_result extends TBase implements JsonSerializable {
  static $isValidate = false;

  static $_TSPEC = array(
    0 => array(
      'var' => 'success',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $success = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'AccountManageService_freezeAccount_result';
  }

  public function read($input)
  {
    return $this->_read('AccountManageService_freezeAccount_result', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('AccountManageService_freezeAccount_result', self::$_TSPEC, $output);
  }

  public function jsonSerialize() {
    $json = new stdClass;
    if ($this->success !== null) {
      $json->success = (string)$this->success;
    }
    return $json;
  }

}

