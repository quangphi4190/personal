<?php
use  App\News;
use  App\Banner;
use  App\System;
use  App\Statistic;
use  App\Solution;
use  App\Content;
use  App\Supports;
if (!function_exists('sort_title')) {

    function sort_title($name = '', $title = '') {
        if (Input::has('filter')) {
            return $title;
        }

        $base_url = Request::all();
        $base_url['sortfield'] = $name;
        $base_url['sorttype'] = "ASC";
        if (Input::has('page')) {
            $base_url['page'] = Input::get('page');
        }

        //sorting
        if (Input::has('sortfield') && Input::has('sorttype')) {
            $base_url['sortfield'] = $name;
            $base_url['sorttype'] = (Input::get('sorttype') == "ASC") ? "DESC" : "ASC";
        }

        $type_sort = Input::get('sorttype') == "ASC" ? '<i class="fa fa-sort-amount-asc"></i>' : '<i class="fa fa-sort-amount-desc"></i>';
        $link = "<a href=" . base_url($base_url) . ">" . (($name == Input::get('sortfield')) ? $type_sort : '') . " " . (($title != '') ? $title : $name) . "</a>";

        return $link;
    }

}

if (!function_exists('page_url')) {

    /**
     *
     * @return url and parameters type get
     */
    function page_url() {
        $data = Request::all();
        return base_url($data);
    }

}

if (!function_exists('base_url')) {

    /**
     *
     * @param type $base_url
     * @return type
     */
    function base_url($base_url = array()) {
        $url = Request::url() . '?';
        foreach ($base_url as $key => $value) {
            $url .= $key . "=" . $value . "&";
        }
        //remove last '&'

        return rtrim($url, "&");
    }

}

if (!function_exists('formatDateVNToEN')) {

    /**
     * @param type $dateVN d/m/Y
     */
    function formatDateVNToEN($dateVN = '') {
        return ($dateVN) ? date('Y-m-d', strtotime(str_replace('/', '-', $dateVN))) : 'N/A';
    }
}

if (!function_exists('formatDateENToVN')) {

    /**
     * @param type $dateEN Y-m-d
     */
    function formatDateENToVN($dateEN = '') {
        return ($dateEN) ? date('d/m/Y', strtotime(str_replace('/', '-', $dateEN))) : 'N/A';
    }
}

if (!function_exists('dateEnToVnFull')) {

    /**
     * @param type $dateEN Y-m-d
     */
    function dateEnToVnFull($timestemp = '') {
        return ($timestemp) ? date('d-m-Y H:i:s', strtotime(str_replace('/', '-', $timestemp))) : 'N/A';
    }
}

if (!function_exists('formatYMD')) {

    /**
     * @param type $dateEN Y-m-d
     */
    function formatYMD($dateTime = '') {
        return ($dateTime)? date('Y-m-d', strtotime(str_replace('/', '-', $dateTime))) : '';    }
}

if (!function_exists('dateVN')) {

    /**
     * @param type $dateEN Y-m-d
     */
    function dateVN($dateEN = '') {
        return ($dateEN) ? date('d-m-Y', strtotime(str_replace('/', '-', $dateEN))) : 'N/A';
    }
}

if (!function_exists('verifyDate')) {

    function verifyDate($date = '')
    {
        return (DateTime::createFromFormat('m/d/Y', $date) !== false);
    }
}


if (!function_exists('nameFirstChar')) {

    function nameFirstChar($str = ''){
        if (!$str) return "-";

        $rs = explode(" ", $str);
        return substr($rs[count($rs)-1], 0, 1);
    }
}

if (!function_exists('changeTitle')) {

    function changeTitle($str,$strSymbol='-',$case=MB_CASE_LOWER){// MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER
        $str=trim($str);
        if ($str=="") return "";
        $str =str_replace('"','',$str);
        $str =str_replace("'",'',$str);
        $str = stripUnicode($str);
        $str = mb_convert_case($str,$case,'utf-8');
        $str = preg_replace('/[\W|_]+/',$strSymbol,$str);
        return $str;
    }

}

if (!function_exists('stripUnicode')) {

    function stripUnicode($str){
        if(!$str) return '';
        //$str = str_replace($a, $b, $str);
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ|å|ä|æ|ā|ą|ǻ|ǎ',
            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ|Å|Ä|Æ|Ā|Ą|Ǻ|Ǎ',
            'ae'=>'ǽ',
            'AE'=>'Ǽ',
            'c'=>'ć|ç|ĉ|ċ|č',
            'C'=>'Ć|Ĉ|Ĉ|Ċ|Č',
            'd'=>'đ|ď',
            'D'=>'Đ|Ď',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|ë|ē|ĕ|ę|ė',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ|Ë|Ē|Ĕ|Ę|Ė',
            'f'=>'ƒ',
            'F'=>'',
            'g'=>'ĝ|ğ|ġ|ģ',
            'G'=>'Ĝ|Ğ|Ġ|Ģ',
            'h'=>'ĥ|ħ',
            'H'=>'Ĥ|Ħ',
            'i'=>'í|ì|ỉ|ĩ|ị|î|ï|ī|ĭ|ǐ|į|ı',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị|Î|Ï|Ī|Ĭ|Ǐ|Į|İ',
            'ij'=>'ĳ',
            'IJ'=>'Ĳ',
            'j'=>'ĵ',
            'J'=>'Ĵ',
            'k'=>'ķ',
            'K'=>'Ķ',
            'l'=>'ĺ|ļ|ľ|ŀ|ł',
            'L'=>'Ĺ|Ļ|Ľ|Ŀ|Ł',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|ö|ø|ǿ|ǒ|ō|ŏ|ő',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ|Ö|Ø|Ǿ|Ǒ|Ō|Ŏ|Ő',
            'Oe'=>'œ',
            'OE'=>'Œ',
            'n'=>'ñ|ń|ņ|ň|ŉ',
            'N'=>'Ñ|Ń|Ņ|Ň',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|û|ū|ŭ|ü|ů|ű|ų|ǔ|ǖ|ǘ|ǚ|ǜ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự|Û|Ū|Ŭ|Ü|Ů|Ű|Ų|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ',
            's'=>'ŕ|ŗ|ř',
            'R'=>'Ŕ|Ŗ|Ř',
            's'=>'ß|ſ|ś|ŝ|ş|š',
            'S'=>'Ś|Ŝ|Ş|Š',
            't'=>'ţ|ť|ŧ',
            'T'=>'Ţ|Ť|Ŧ',
            'w'=>'ŵ',
            'W'=>'Ŵ',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|ÿ|ŷ',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ|Ÿ|Ŷ',
            'z'=>'ź|ż|ž',
            'Z'=>'Ź|Ż|Ž'
        );
        foreach($unicode as $khongdau=>$codau) {
            $arr=explode("|",$codau);
            $str = str_replace($arr,$khongdau,$str);
        }
        return $str;
    }

}

if (!function_exists('responseJson')) {

    function responseJson($error = 0, $message = '', $data = null) {
        return response()->json([
            'error' => $error,
            'message' => $message,
            'data' => $data
        ]);
    }

}

if(!function_exists('getLevel')) {

    function getLevel($level = 0){
        if($level == 0){
            $txt_name = 'Thành viên';
        }elseif($level == 1){
            $txt_name = 'Quản trị';
        }elseif($level == 2){
            $txt_name = 'Siêu quản trị';
        }elseif($level == 3){
            $txt_name = 'Nhà cung cấp';
        }else{
            $txt_name = 'N/A';
        }

        return $txt_name;
    }

}

if(!function_exists('getAvatar')) {

    function getAvatar($name = ''){
        if ($name)
            return strpos($name,"://") > 0 ? $name : config('common.avatar_url').$name;

        return config('common.avatar_url_default');
    }

}

if(!function_exists('getGender')) {

    function getGender($gender = 0){
        return $gender == 1 ? 'Nam' : 'Nữ';
    }

}

if(!function_exists('firstName')) {

    function firstName($name = '') {
        if($name) {
            $locale = App::getLocale();
            $nameEx = explode(' ', trim($name));
            if ($locale == 'vi')
                $firstName = $nameEx[count($nameEx)-1];
            else
                $firstName = $nameEx[0];

            return $firstName;
        }else
        return '';
    }

}

if(!function_exists('getPublished')) {

    function getPublished($published = 0){
        if($published == 0){
            $msg = 'Chờ duyệt';
        }elseif($published == 1){
            $msg = 'Hoạt động';
        }elseif($published == 2){
            $msg = 'Không duyệt';
        }elseif($published == 3){
            $msg = 'Cáo bận';
        }elseif($published == 4){
            $msg = 'Nghĩ làm';
        }

        return $msg;
    }

}

if(!function_exists('areaTree')) {

    function areaTree($data = [], $parent = 0, $flag = '', $select = 0) {
        if (!$data)
            return '';

        foreach ($data as $key => $value) {
            $id = $value->id;
            if ($value->parent == $parent) {
                $select == $id ? $selected = 'selected' : $selected = '';
                echo "<option $selected value='$id'>$flag$value->name</option>";
                unset($data[$key]);
                areaTree($data, $id, '|__', $select);
            }
        }
    }

}

if (!function_exists('anonymousUsername')) {

    function anonymousUsername($name = 'guest')
    {
        $author = explode(" ", trim($name));
        $strlen = count($author) - 1;

        if ($strlen >= 1) {
            $name = '';
            foreach($author as $key => $item) {
                if($strlen > $key)
                   $name .= " ".substr($item, 0, 1)."***";
               else
                   $name .= " $item";
           }
       }

       return trim($name);
   }
}

if (!function_exists('formatDatetime')) {

    function formatDatetime($date = '') {

        return $date ? \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->toW3CString() : '';
    }
}

if (!function_exists('secondsToTime')) {

    function secondsToTime($seconds) {
        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$seconds");
        return $dtF->diff($dtT)->format('%a ngày, %h giờ, %i phút');
    }
}

if (!function_exists('thousandsFormat')) {

    function thousandsFormat($num = 0) {
        if($num > 1000) {
            $number_format = number_format($num);
            $array = explode(',', $number_format);
            $parts = array('N', 'Tr', 'Tỷ');
            $display = $num;
            $display = $array[0] . ((int) $array[1][0] !== 0 ? '.' . $array[1][0] : '');
            $display .= $parts[count($array) - 2];

            return $display;
        }

        return $num;
    }
}

if (!function_exists('addPrefixPhone')) {

    function addPrefixPhone($phone = null)
    {
        if (substr($phone, 0, 3) != "+84") {
            if (substr($phone, 0, 1) == "0") {
                $phone = "+84".substr($phone, 1);
            }else{
                $phone = "+84".$phone;
            }

            if (substr($phone, 0, 2) == "84") {
                $phone = "+".$phone;
            }
        }

        return $phone;
    }
}

if (!function_exists('imageSplitLfm')) {

    function imageSplitLfm($str = '')
    {
        if($str){
            $str = explode("shares/", $str);
            $str = $str[1] ?? $str[0];
        }

        return $str;
    }
}

if (!function_exists('translate')) {

    function translate($json = '', $lang = null)
    {
        $locale = $lang ?? App::getLocale();

        $json = json_decode($json);

        return $json->$locale;
    }
}

function formatDMY($dateTime)
{
    return ($dateTime) ? date('d/m/Y', strtotime(str_replace('/', '-', $dateTime))) : '';
}

if (!function_exists('displayActTrans')) {

    function displayActTrans($act = 0)
    {
        $txt = '';

        if($act == 0) $txt = 'chuyển loại tin';
        elseif($act == 1) $txt = 'hủy tin';
        elseif($act == 2) $txt = 'view tin';
        elseif($act == 3) $txt = 'đợi';

        return $txt;
    }
}
if (!function_exists('sex')) {

    function sex($sex = 0)
    {
        $txt = '';

        if($sex == 0) $txt = 'Nam';
        elseif($sex == 1) $txt = 'Nữ';

        return $txt;
    }
}

if (!function_exists('displayPointTrans')) {

    function displayPointTrans($point = 0, $act = 0)
    {
        $txt = '';

        if($act == 0 || $act == 3) $txt = '- ';
        elseif($act == 1 || $act == 2) $txt = '+ ';

        return $txt . $point;
    }
}

if (!function_exists('displayStatusTrans')) {

    function displayStatusTrans($status = 0)
    {
        $html = '';

        if($status == 0) $html = "<span class='label label-warning'>".__('message.pending')."</span>";
        elseif($status == 1) $html = '<span class="label label-success">'.__('message.approved').'</span>';
        elseif($status == 2) $html = '<span class="label label-danger">'.__('message.reject').'</span>';

        return $html;
    }
}

if (!function_exists('referralCode')) {

    function referralCode($name = null, $phone = null) {

        $code = '';
        if($name && $phone) {
            $name = explode(' ', $name);
            $name_lent = count($name);
            $code_name = substr($name[$name_lent-1], 0, 1).substr($name[0], 0, 1);
            $code_phone = substr($phone, -3);

            $code = strtoupper($code_name.'.'.$code_phone.'.'.Str::random(3));
        }

        return $code;
    }
}
if (!function_exists('statusUser')) {

    function statusUser($email_verified_at = null)
    {
        $html = '';

        if($email_verified_at != null) $html = "<span class='label label-warning'>".__('message.deactive')."</span>";
        elseif($email_verified_at == null) $html = '<span class="label label-success">'.__('message.active').'</span>';

        return $html;
    }
}
if (!function_exists('statusCategory')) {

    function statusCategory($active = 1)
    {
        $html = '';

        if($active == 0) $html = "<span class='label label-warning'>".__('message.deactive')."</span>";
        elseif($active == 1) $html = '<span class="label label-success">'.__('message.active').'</span>';

        return $html;
    }
}
if (!function_exists('statusRegisExam')) {

    function statusRegisExam($active = 1)
    {
        $html = '';

        if($active == 1) $html = "<span class='label label-warning'>".__('message.notContact')."</span>";
        elseif($active == 2) $html = '<span class="label label-success">'.__('message.doingcontact').'</span>';

        return $html;
    }
}
if (!function_exists('convert')) {

    function convert($description = null)
    {
        $html = strip_tags($description);
        return $html;
    }
}
if (!function_exists('formatDMY')) {
    function formatDMY($dateTime)
    {
        return ($dateTime) ? date('d/m/Y', strtotime(str_replace('/', '-', $dateTime))) : '';
    }
}
if (!function_exists('formatYMD')) {
    function formatYMD($dateTime)
    {
        return ($dateTime) ? date('Y-m-d', strtotime(str_replace('-', '/', $dateTime))) : '';
    }
}
//PHP Excel
function col($index) {
    return PHPExcel_Cell::stringFromColumnIndex($index);
}
function cell($col, $row) {
    return col($col).$row;
}
function cells($col1, $row1, $col2, $row2, $type = 'range') {
    if ($type == 'range') {
        return cell($col1, $row1).':'.cell($col1+$col2-1, $row1+$row2-1);
    }
    if ($type == 'coodinate') {
        return cell($col1, $row1).':'.cell($col2, $row2);
    }
    return '';
}
//END PHP Excel
function sendMailSendgrid($subject, $content_html = '', $to, $from, $toname = '', $fromname = '', $content_text = '') {
    $request = 'https://api.sendgrid.com/api/mail.send.json';
    $user = 'quangphi4190';
    $pass = 'phi112250522117';

    //create data post
    $post_data = array(
        'api_user' => $user,
        'api_key' => $pass,
        'to' => $to,
        'toname' => $toname,
        'subject' => $subject,
        'html' => $content_html,
        'text' => $content_text,
        'from' => $from,
        'fromname' => $fromname
    );

    //create string data post
    foreach ($post_data as $key => $value) {
        $post_items[] = $key . '=' . $value;
    }
    $post_string = implode('&', $post_items);

    //create cURL connection
    $curl_connection = curl_init($request);
    curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
    //curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);

    //obtain response
    $result = curl_exec($curl_connection);

    //close the connection
    curl_close($curl_connection);

    return json_decode($result);
}
if(!function_exists('getDataSystem')) {

    function getDataSystem(){
        $banners = Banner::orderBy('created_at','desc')->get();
        $thanhphanhethongs = System::orderBy('order','asc')->limit(6)->get();
        $giaiphaps = Solution::orderBy('order','asc')->limit(4)->get();
        $thongkes = Statistic::orderBy('order','asc')->limit(4)->get();
        $supports = Supports::orderBy('order','asc')->limit(3)->get();
        $tintuc = News::where('category_id',1)->orderBy('created_at','desc')->get();
        $data_banner = $banners;

        $dataSystem =[
            'banners' => $data_banner,
            'tintuc' => $tintuc,
            'supports' => $supports,
            'thanhphanhethongs' => $thanhphanhethongs,
            'giaiphaps' => $giaiphaps,
            'thongkes' => $thongkes,
        ];
        return $dataSystem;
    }

}
