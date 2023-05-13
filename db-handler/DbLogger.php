<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2022-12-12
 * Time: 1:36 AM
 */

namespace Maatify\DB;

use Maatify\App\App;


abstract class DbLogger extends Model
{
//    protected DB $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = App::dbLog();
    }
}