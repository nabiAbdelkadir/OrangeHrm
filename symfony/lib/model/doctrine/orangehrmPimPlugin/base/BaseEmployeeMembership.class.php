<?php

/**
 * BaseEmployeeMembership
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                 $id                                      Type: integer(6), primary key
 * @property int                 $empNumber                               Type: integer(4)
 * @property int                 $membershipId                            Type: integer
 * @property float               $subscriptionFee                         Type: decimal(15)
 * @property string              $subscriptionPaidBy                      Type: string(30)
 * @property string              $subscriptionCurrency                    Type: string(13)
 * @property string              $subscriptionCommenceDate                Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @property string              $subscriptionRenewalDate                 Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @property Membership          $Membership                              
 * @property Employee            $Employee                                
 *  
 * @method int                   getId()                                  Type: integer(6), primary key
 * @method int                   getEmpnumber()                           Type: integer(4)
 * @method int                   getMembershipid()                        Type: integer
 * @method float                 getSubscriptionfee()                     Type: decimal(15)
 * @method string                getSubscriptionpaidby()                  Type: string(30)
 * @method string                getSubscriptioncurrency()                Type: string(13)
 * @method string                getSubscriptioncommencedate()            Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @method string                getSubscriptionrenewaldate()             Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @method Membership            getMembership()                          
 * @method Employee              getEmployee()                            
 *  
 * @method EmployeeMembership    setId(int $val)                          Type: integer(6), primary key
 * @method EmployeeMembership    setEmpnumber(int $val)                   Type: integer(4)
 * @method EmployeeMembership    setMembershipid(int $val)                Type: integer
 * @method EmployeeMembership    setSubscriptionfee(float $val)           Type: decimal(15)
 * @method EmployeeMembership    setSubscriptionpaidby(string $val)       Type: string(30)
 * @method EmployeeMembership    setSubscriptioncurrency(string $val)     Type: string(13)
 * @method EmployeeMembership    setSubscriptioncommencedate(string $val) Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @method EmployeeMembership    setSubscriptionrenewaldate(string $val)  Type: date(25), Date in ISO-8601 format (YYYY-MM-DD)
 * @method EmployeeMembership    setMembership(Membership $val)           
 * @method EmployeeMembership    setEmployee(Employee $val)               
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmployeeMembership extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_member_detail');
        $this->hasColumn('id', 'integer', 6, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 6,
             ));
        $this->hasColumn('emp_number as empNumber', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('membship_code as membershipId', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('ememb_subscript_amount as subscriptionFee', 'decimal', 15, array(
             'type' => 'decimal',
             'scale' => false,
             'length' => 15,
             ));
        $this->hasColumn('ememb_subscript_ownership as subscriptionPaidBy', 'string', 30, array(
             'type' => 'string',
             'default' => '',
             'length' => 30,
             ));
        $this->hasColumn('ememb_subs_currency as subscriptionCurrency', 'string', 13, array(
             'type' => 'string',
             'default' => '',
             'length' => 13,
             ));
        $this->hasColumn('ememb_commence_date as subscriptionCommenceDate', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
        $this->hasColumn('ememb_renewal_date as subscriptionRenewalDate', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Membership', array(
             'local' => 'membershipId',
             'foreign' => 'id'));

        $this->hasOne('Employee', array(
             'local' => 'empNumber',
             'foreign' => 'empNumber'));
    }
}