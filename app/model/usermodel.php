<?php
namespace PHPMVC\Model;

use PHPMVC\Model\AbstractModel;

class UserModel extends AbstractModel
{
    public $id;
    public $nom;
    public $prenom;
    public $password;
    public $mail;
    public $tel;
    public $block;



    protected static $tableName = 'client';
    protected static $tableSchema = array(
        'id'            => self::DATA_TYPE_INT,
        'nom'          => self::DATA_TYPE_STR,
        'prenom'           => self::DATA_TYPE_STR,
        'password'          => self::DATA_TYPE_STR,
        'mail'             => self::DATA_TYPE_STR,
        'tel'       => self::DATA_TYPE_INT,
        'block'       => self::DATA_TYPE_INT
    );

    protected static $primaryKey = 'id';

   /* public function __construct($nom,$Prename,$Password,$Email,$PhoneNumber)
    {
        $this->Username=$nom;
        $this->Prename=$nom;
        $this->Password=$nom;
        $this->Email=$nom;
        $this->PhoneNumber=$nom;
    }*/

        public function cryptPassword($password)
        {
            $this->Password = crypt($password, APP_SALT);
        }

        // TODO:: FIX THE TABLE ALIASING
        public static function getUsers(UserModel $user)
        {
            return self::get(
            'SELECT au.*, aug.GroupName GroupName FROM ' . self::$tableName . ' au INNER JOIN app_users_groups aug ON aug.GroupId = au.GroupId WHERE au.UserId != ' . $user->id
            );
        }

        public static function userExists($username)
        {
            return self::get('
                SELECT * FROM ' . self::$tableName . ' WHERE Username = "' . $username . '"
            ');
        }



        /*public static function authenticate ($username, $password, $session)
        {
            $password = crypt($password, APP_SALT) ;
            $sql = 'SELECT *, (SELECT GroupName FROM app_users_groups WHERE app_users_groups.GroupId = ' . self::$tableName . '.GroupId) GroupName FROM ' . self::$tableName . ' WHERE Username = "' . $username . '" AND Password = "' .  $password . '"';
            $foundUser = self::getOne($sql);
            if(false !== $foundUser) {
                if($foundUser->Status == 2) {
                    return 2;
                }
                $foundUser->LastLogin = date('Y-m-d H:i:s');
                $foundUser->save();
                $foundUser->profile = UserProfileModel::getByPK($foundUser->UserId);
                $foundUser->privileges = UserGroupPrivilegeModel::getPrivilegesForGroup($foundUser->GroupId);
                $session->u = $foundUser;
                return 1;
            }
            return false;
        }*/
}