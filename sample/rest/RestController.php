<?php

require_once("config.php");
require_once("includes/jwt/JWT.php");
require_once("Word.php");

use \Firebase\JWT\JWT;

class RestController
{
    /**
     * Returns a JSON string object to the browser when hitting the root of the domain
     *
     * @url GET /
     */
    public function index()
    {
	   // ToDo: generate object to represent all routes with generator and return it
	   return "Nothing to display";
    }

    /**
     * Logs in a user with the given username and password POSTed. Though true
     * REST doesn't believe in sessions, it is often desirable for an AJAX server.
     *
     * @url POST /auth
     */
    public function auth()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

	    //ToDo: handle login and generate authtoken return it
        return JWT::encode('abc', 'my_key');
    }

    /**
     * Saves a user to the database
     *
     * @url POST /users
     * @url PUT /users/$id
     */
    public function saveUser($id = null, $data)
    {
        // ... validate $data properties such as $data->username, $data->firstName, etc.
        // $data->id = $id;
        // $user = User::saveUser($data); // saving the user to the database
        $user = array("id" => $id, "name" => null);
        return $user; // returning the updated or newly created user object
    }

    /**
     * Get Definition
     * 
     * @url GET /d/$word
     */
    public function getDefinition($word)
    {
        $w = new Word();
        $w->Name = $word;

        $q = mysql_query("SELECT * FROM dictionary where word LIKE '$word'");

        if(mysql_num_rows($q) > 0) {
            $qo = mysql_fetch_object($q);

            $w->Definition = $qo->definition;
            $w->Tags = explode(",", $qo->tags);
            $w->Active = $qo->active;

            if($w->Active) {
                return $w;
            }
            else {
                throw new RestException(404, "'$word'");
            }
            
        }
        else {
            throw new RestException(404, "'$word'");
        }
    }
}