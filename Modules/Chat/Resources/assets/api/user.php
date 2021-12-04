<?php

/**
 * @author JonnyBo
 * @copyright 2021
 */

ini_set("display_errors", 1);



class Api {
    
    public $db;
    
    public $domen;

    public $headers;

    public $room;

    public $projects;
    
    public function __construct($dbFile) {
        //$this->username = $username;
        $this->domen = 'https://m.celeviki.com/';

        $this->headers = [];
        //$this->headers[] = "Accept: application/json";
        $this->headers[] = "Content-Type: application/json";

        $this->room = [
            'b00.regagro.net' => '!KSJBBrMecIzlsLeBCD:event.regagro.net',
            'f00.regagro.net' => '!JmHWBKOZJitEyiLEEx:event.regagro.net',
            'p00.regagro.net' => '!wATZuJPnPHnZQbGhTL:event.regagro.net',
            'r00.regagro.net' => '!AaucEXnugdGcwezIax:event.regagro.net',
            'r28.regagro.net' => '!jDQyzzNsjVGHGfVHFn:event.regagro.net',
            'p28.regagro.net' => '!JEsXnspFVlokpoIsnG:event.regagro.net',
            'b01.regagro.net' => '!JNqAUFxkXJvCwsByjR:event.regagro.net',
            'b02.regagro.net' => '!VVsnbfNVqKDSZdMVFU:event.regagro.net',
            'b03.regagro.net' => '!eVuOCKcQsVaJbyYyLR:event.regagro.net',
            'b04.regagro.net' => '!SNPgkWUrcVWkSmzFyu:event.regagro.net',
            'b05.regagro.net' => '!RXpwIAguYupztGDgMR:event.regagro.net',
            'b06.regagro.net' => '!lqdedVxYlSBkuycJDK:event.regagro.net',
            'b07.regagro.net' => '!XnDYUPPHNRKapHKnwz:event.regagro.net',
            'b08.regagro.net' => '!VBMYBVtYAAmkQmGojF:event.regagro.net',
            'b09.regagro.net' => '!aYQrcaUIjrzHKOqcXR:event.regagro.net',
            'b10.regagro.net' => '!ZJfxoGdCqqofJDxiKl:event.regagro.net',
            'b11.regagro.net' => '!nyewngAxsDLnlwIeJz:event.regagro.net',
            'b12.regagro.net' => '!FZHXtljBSkQLjBOAcd:event.regagro.net',
            'b13.regagro.net' => '!mNNglnYgkbMyRZRDwe:event.regagro.net',
            'b14.regagro.net' => '!TBXMradWlnaydLpXJF:event.regagro.net',
            'b15.regagro.net' => '!OPTLZuNdSxfwFvcxAB:event.regagro.net',
            'b16.regagro.net' => '!XMUIjyvpKYqkKuDmmd:event.regagro.net',
            'b17.regagro.net' => '!qJKOQyBzkPygEdFxPy:event.regagro.net',
            'b18.regagro.net' => '!wbWSsQGtCiBPYmtamQ:event.regagro.net',
            'b19.regagro.net' => '!VrlctPnTSJHdIHmIlf:event.regagro.net',
            'b20.regagro.net' => '!hWgAngSCKKIxLRRmGZ:event.regagro.net',
            'b21.regagro.net' => '!uIfRFOKHTECqefwuRX:event.regagro.net',
            'b22.regagro.net' => '!DBxXTJJqXayBmmSAlW:event.regagro.net',
            'b23.regagro.net' => '!EEUxITgMOnlXIMIGoo:event.regagro.net',
            'b24.regagro.net' => '!hcSxaBhkzgldqYkAAB:event.regagro.net',
            'b25.regagro.net' => '!DiJMGFAnQSrUrvuDCx:event.regagro.net',
            'b26.regagro.net' => '!cbQMXIoaVmmotskkXu:event.regagro.net',
            'b27.regagro.net' => '!rrlQHGFAjpXxFRSpeZ:event.regagro.net',
            'b28.regagro.net' => '!PxWetidKIEtPAIkhjH:event.regagro.net',
            'b29.regagro.net' => '!kzwwTiWUefXtLhncdl:event.regagro.net',
            'b30.regagro.net' => '!vCjQaoWyEhhRGONjUO:event.regagro.net',
            'b40.regagro.net' => '!OJyipPesqXQbuAFNjo:event.regagro.net',
            'b92.regagro.net' => '!EvvMVjpwqrBqitTngf:event.regagro.net'
        ];
        $this->projects = [
            'r00.regagro.net' => 16,
            'p00.regagro.net' => 18,
            'f00.regagro.net' => 17,
            'b00.regagro.net' => 22,
            'r28.regagro.net' => 28,
            'p28.regagro.net' => 27,
            'b01.regagro.net' => 31,
            'b02.regagro.net' => 34,
            'b03.regagro.net' => 24,
            'b04.regagro.net' => 35,
            'b05.regagro.net' => 39,
            'b06.regagro.net' => 40,
            'b07.regagro.net' => 41,
            'b08.regagro.net' => 42,
            'b09.regagro.net' => 43,
            'b10.regagro.net' => 44,
            'b11.regagro.net' => 45,
            'b12.regagro.net' => 46,
            'b13.regagro.net' => 32,
            'b14.regagro.net' => 33,
            'b15.regagro.net' => 47,
            'b16.regagro.net' => 48,
            'b17.regagro.net' => 49,
            'b18.regagro.net' => 50,
            'b19.regagro.net' => 51,
            'b20.regagro.net' => 52,
            'b21.regagro.net' => 53,
            'b22.regagro.net' => 54,
            'b23.regagro.net' => 36,
            'b24.regagro.net' => 55,
            'b25.regagro.net' => 56,
            'b26.regagro.net' => 57,
            'b27.regagro.net' => 58,
            'b28.regagro.net' => 37,
            'b29.regagro.net' => 59,
            'b30.regagro.net' => 60,
            'b40.regagro.net' => 38,
            'b92.regagro.net' => 25
        ];

        if(file_exists($dbFile)) {
            $this->db = new \SQLite3($dbFile);
            //$this->getToken($this->username);
        } else
            throw new Exception('Не найден файл БД');    
    }

    public function curl($url, $post, $token, $headers = false, $cookie = false, $filename = false, $charset = false){

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        if ($cookie) {
            curl_setopt($curl , CURLOPT_COOKIEJAR, __DIR__ . '/cookies_'.$cookie.'.txt');
            curl_setopt($curl , CURLOPT_COOKIEFILE, __DIR__ . '/cookies_'.$cookie.'.txt');
        }

        if ($filename) {
            curl_setopt($curl, CURLOPT_HEADER, 0);
            $fp = fopen($filename, 'w');
            curl_setopt($curl, CURLOPT_FILE, $fp);
        }

        //curl_setopt($curl, CURLOPT_COOKIESESSION, 1);
        if($post){
            //curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
        }
        if ($token) {
            $headers = array("Authorization: Bearer $token", "Content-Type: application/x-www-form-urlencoded");
        }
        if ($headers) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        }

        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);

        $out = false;


        $i = 0;
        while ($i < 3) {
            if ($out = curl_exec($curl))
                break;
            sleep(5);
            $i++;
        }


        //$info = curl_getinfo($curl);
        //print_r($info);
        curl_close($curl);
        if ($charset)
            $out = iconv('windows-1251','utf-8',$out);
        return $out;
    }

    protected function getMatrixUsername($username) {
        return '@' . $username . ':m.celeviki.com';
    }
    
    public function getToken($username) {
        $user_id = $this->getMatrixUsername($username);
        $sql = "SELECT token FROM access_tokens WHERE user_id = '{$user_id}' ORDER BY id DESC LIMIT 1";
        $result = $this->db->query($sql);
        $token = false;
        if($data = $result->fetchArray(SQLITE3_ASSOC)) {
            $token = $data['token'];
        }
        return $token;
    }

    public function processRegistration($username, $project) {
        $room = $this->room[$project];
        $reg = $this->registerUser($username);
        if (isset($reg['error'])) {
            return json_encode(['error' => 'Регистрация пользователя: ' . $reg['errcode'] . ':' . $reg['error']]);
        }
        $invite = $this->inviteUserToRoom($reg['user_id'], $room);
        if (isset($invite['error'])) {
            return json_encode(['error' => 'Приглашение в комнату: ' . $invite['errcode'] . ':' . $invite['error']]);
        }
        $join = $this->joinUserToRoom($reg['access_token'], $room);
        if (isset($join['error'])) {
            return json_encode(['error' => 'Добавление в комнату: ' . $join['errcode'] . ':' . $join['error']]);
        }
        return ['success' => 'ok'];
    }
    
    protected function inviteUserToRoom($user_id, $room_id, $admin_token) {
        $post_param = '{
          "user_id": "'.$user_id.'"
        }';
        $url = $this->domen . '_matrix/client/r0/rooms/'.$room_id.'/invite?access_token='.$admin_token;
        return json_decode($this->curl($url, $post_param, false, $this->headers), true);
    }

    protected function joinUserToRoom($token, $room_id) {
        $post_param = '{}';
        $url = $this->domen . '_matrix/client/r0/join/'.$room_id.'?access_token='.$token;
        return json_decode($this->curl($url, $post_param, false, $this->headers), true);
    }
    
    public function getUser($username) {
        $sql = "SELECT * FROM users WHERE name = '{$username}'";
        $result = $this->db->query($sql);
        if($data = $result->fetchArray(SQLITE3_ASSOC)) {
            return $data;
        }
        return false;
    }
    
    public function addUsersToRoom($project) {
        $users = $this->getProjectUsers($project);
        $admin_token = $this->getToken('admin');
        $room = $this->room[$project];
        $result = [];
        if (!empty($users['data'])) {
            foreach($users['data'] as $user) {
                //print_r($user);
                if (isset($user['username'])) {
                    $res = $this->addUserToRoom($room, strtolower($user['username']), $admin_token);
                    $result[] = array('user' => $user['username'], 'result' => $res);
                }
            }
        }
        return json_encode($result);
    }

    public function registrUserToRoom($room, $username) {
        //$room = $this->room[$project];
        $admin_token = $this->getToken('admin');
        $result = $this->addUserToRoom($room, $username, $admin_token);
        return json_encode($result);
    }

    public function registrUserToAllRooms($username) {
        $admin_token = $this->getToken('admin');
        $result = [];
        foreach ($this->room as $project => $room) {
            $result[] = $this->addUserToRoom($room, $username, $admin_token);
            sleep(3);
        }
        return json_encode($result);
    }
    
    protected function getProjectUsers($project) {
        $project_id = $this->projects[$project];
        $url = 'https://glob.regagro.net/api/users?client_id=' . $project_id;
        return json_decode(self::curl($url, false, false), true);
    }
    
    protected function addUserToRoom($room, $username, $admin_token) {
        $user_id = strtolower($this->getMatrixUsername($username));
        if (!$this->checkUser($user_id)) {
            $reg = $this->registerUser($username);
            if (isset($reg['error'])) {
                return ['error' => 'Регистрация пользователя: ' . $reg['errcode'] . ':' . $reg['error']];
            }
            $user_id = $reg['user_id'];
        }
        $invite = $this->inviteUserToRoom($user_id, $room, $admin_token);
        if (isset($invite['error'])) {
            return ['error' => 'Приглашение в комнату пользователя '.$username.': ' . $invite['errcode'] . ':' . $invite['error']];
        }
        $user_token = $this->getToken($username);
        if (!$user_token) {
            return ['error' => 'не найден токен для пользователя ' . $username];
        }
        $join = $this->joinUserToRoom($user_token, $room);
        if (isset($join['error'])) {
            return ['error' => 'Добавление в комнату пользователя '.$username.': ' . $join['errcode'] . ':' . $join['error']];
        }
        return ['success' => 'ok'];
    }
    
    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $result = $this->db->query($sql);
        $out = [];
        while($data = $result->fetchArray(SQLITE3_ASSOC)) {
            $out[] = $data;
        }
        return $out;
    }

    public function checkUser($username) {
        $sql = "SELECT * FROM users WHERE name = '{$username}'";
        $result = $this->db->query($sql);
        if($data = $result->fetchArray(SQLITE3_ASSOC)) {
            return true;
        }
        return false;
    }
    
    public function registerUser($username, $password = 'vmestestore') {
        $post_param = '{
          "username": "'.$username.'",
          "password": "'.$password.'",
          "auth" : {
            "type": "m.login.dummy"
            }
        }';
        $url = $this->domen . '_matrix/client/r0/register';
        return json_decode($this->curl($url, $post_param, false, $this->headers), true);
    }

    public function loginUser($username, $password) {
        $user_id = strtolower($this->getMatrixUsername($username));
        if (!$this->checkUser($user_id)) {
            $reg = $this->registerUser($username);
            if (isset($reg['error'])) {
                return ['error' => 'Регистрация пользователя: ' . $reg['errcode'] . ':' . $reg['error']];
            }
            $user_id = $reg['user_id'];
        }
		/*
        $user_token = $this->getToken($username);
        if (!$user_token) {
            return ['error' => 'не найден токен для пользователя ' . $username];
        }
        return ['success' => 'ok'];
		*/
		$post_param = '{
            "identifier": "{
			  "type": "m.id.user",
			  "user": "'.$username.'"
			},
			"password": "'.$password.'",	
            "type": "m.login.password"
        }';
        $url = $this->domen . '_matrix/client/r0/login';
        return json_decode($this->curl($url, $post_param, false, $this->headers), true);
    }

    public function deleteUser($username) {
        try {
            $user_id = $this->getMatrixUsername($username);
            $sql = "delete from users where name='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from access_tokens where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from devices where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from user_ips where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from room_account_data where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from room_memberships where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from users_who_share_private_rooms where user_id='{$user_id}' or other_user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from account_data where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from blocked_rooms where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from current_state_delta_stream where state_key = '{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from deleted_pushers where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from device_inbox where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from device_lists_outbound_last_success where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from device_lists_remote_cache where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from device_lists_stream where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from e2e_device_keys_json where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from e2e_one_time_keys_json where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from e2e_room_keys where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from e2e_room_keys_versions where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from erased_users where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from event_push_actions where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from event_push_actions_staging where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from event_push_summary where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from event_reports where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from group_attestations_remote where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from group_attestations_renewals where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from group_invites where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from group_summary_users where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from group_users where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from local_group_membership where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from local_group_updates where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from local_media_repository where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from monthly_active_users where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from open_id_tokens where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from presence where user_id='{$user_id}'";
            $result = $this->db->exec($sql);

            //$sql = "delete from presence_list where user_id='{$username}' or observed_user_id='{$username}'";
            //$result = $this->db->exec($sql);
            $sql = "delete from presence_stream where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from profiles where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from push_rules_stream where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from ratelimit_override where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from receipts_graph where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from receipts_linearized where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from remote_profile_cache where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from room_tags where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from room_tags_revisions where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from user_daily_visits where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from user_directory where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from user_directory_search where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from user_threepids where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from users_in_public_rooms where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from users_pending_deactivation where user_id='{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from user_filters where user_id='{$user_id}'";
            $result = $this->db->exec($sql);

            $sql = "delete from e2e_cross_signing_keys where user_id = '{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from e2e_cross_signing_signatures where user_id = '{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from e2e_fallback_keys_json where user_id = '{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from local_current_membership where user_id = '{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from profiles where user_id = '{$username}'";
            $result = $this->db->exec($sql);
            $sql = "update rooms set creator = '' where creator = '{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from state_events where state_key = '{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from state_groups_state where state_key = '{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from ui_auth_sessions where serverdict = '{}'";
            $result = $this->db->exec($sql);
            $sql = "delete from user_filters where user_id = '{$username}'";
            $result = $this->db->exec($sql);
            $sql = "delete from user_signature_stream where from_user_id = '{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from user_stats_current where user_id = '{$user_id}'";
            $result = $this->db->exec($sql);
            $sql = "delete from user_stats_historical where user_id = '{$user_id}'";
            $result = $this->db->exec($sql);


            return 'ok';
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
}


if (!$_GET['token'] || $_GET['token'] != '7e3rfcr53grh4tgdwcwdqe76tgdvcb==')
    die('Не передан или неправильный токен!');
    
    

$dbFile = "/var/lib/matrix-synapse/homeserver.db";
//$dbFile = "i:\NewServer\data\DB_SQLITE\homeserver.db";
$api = new Api($dbFile);
$out = '!Error!!!';
if ($_GET['action']) {
    switch(trim(strip_tags($_GET['action']))) {
        case 'addtoroom':
            $project = trim(strip_tags($_GET['project']));
            $out = $api->addUsersToRoom($project);
            //var_dump($out);
        break;
        case 'addusertoroom':
            $room = trim(strip_tags($_GET['room']));
            $username = strtolower(trim(strip_tags($_GET['username'])));
            $out = $api->registrUserToRoom($room , $username);
            //var_dump($out);
            break;
        case 'addusertoallrooms':
            $username = strtolower(trim(strip_tags($_GET['username'])));
            $out = $api->registrUserToAllRooms($username);
            //var_dump($out);
            break;
        case 'register':
            $project = trim(strip_tags($_GET['project']));
            $username = strtolower(trim(strip_tags($_GET['username'])));
            $out = $api->processRegistration($username, $project);
        break;
        case 'registeruser':
            $password = trim(strip_tags($_GET['password']));
            $username = strtolower(trim(strip_tags($_GET['username'])));
            $out = $api->registerUser($username, $password);
			$out = json_encode($out);
            break;
        case 'loginuser':
            $password = trim(strip_tags($_GET['password']));
            $username = strtolower(trim(strip_tags($_GET['username'])));
            $out = $api->loginUser($username, $password);
			$out = json_encode($out);
            break;
        case 'deleteuser':
            $username = strtolower(trim(strip_tags($_GET['username'])));
            $out = $api->deleteUser($username);
        break;
    }
    echo $out;
}




?>