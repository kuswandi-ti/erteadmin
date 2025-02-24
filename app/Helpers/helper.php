<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\SettingSystem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

// Role & Permission - Begin
function canAccess(array $permissions)
{
    $permission = Auth::guard(getGuardNameLoggedUser())->user()->hasAnyPermission($permissions);
    $super_admin = Auth::guard(getGuardNameLoggedUser())->user()->hasRole('Super Admin');

    if ($permission || $super_admin) {
        return true;
    } else {
        return false;
    }
}

function checkPermission(string $permission)
{
    return Auth::guard(getGuardNameLoggedUser())->user()->hasPermissionTo($permission);
}

function getArrayAdminPermission()
{
    return [
        ['guard_name' => getGuardNameAdmin(), 'name' => 'role_create', 'alias' => 'Membuat Role', 'group_name' => 'Role Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'role_delete', 'alias' => 'Hapus Role', 'group_name' => 'Role Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'role_index', 'alias' => 'Daftar Role', 'group_name' => 'Role Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'role_update', 'alias' => 'Perbarui Role', 'group_name' => 'Role Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'permission_create', 'alias' => 'Membuat Permission', 'group_name' => 'Permission Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'permission_delete', 'alias' => 'Hapus Permission', 'group_name' => 'Permission Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'permission_index', 'alias' => 'Daftar Permission', 'group_name' => 'Permission Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'permission_update', 'alias' => 'Perbarui Permission', 'group_name' => 'Permission Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'user_approve', 'alias' => 'Approve User', 'group_name' => 'User Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'user_create', 'alias' => 'Membuat User', 'group_name' => 'User Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'user_delete', 'alias' => 'Hapus User', 'group_name' => 'User Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'user_index', 'alias' => 'Daftar User', 'group_name' => 'User Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'user_reject', 'alias' => 'Tolak User', 'group_name' => 'User Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'user_restore', 'alias' => 'Pulihkan User', 'group_name' => 'User Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'user_update', 'alias' => 'Perbarui User', 'group_name' => 'User Permission', 'menu_name' => 'User Management'],
        ['guard_name' => getGuardNameAdmin(), 'name' => 'setting_perusahaan', 'alias' => 'Pengaturan Info Perusahaan', 'group_name' => 'Pengaturan', 'menu_name' => 'Pengaturan'],
    ];
}
// Role & Permission - End


/* User - Begin */
function getLoggedUserRole()
{
    $role = Auth::guard(getGuardNameLoggedUser())->user()->getRoleNames();
    return $role->first();
}

function getLoggedUser()
{
    $user = Auth::guard(getGuardNameLoggedUser())->user();
    return $user;
}

function getGuardNameLoggedUser(): ?string
{
    if (Auth::guard(getGuardNameAdmin())->check()) {
        return getGuardNameAdmin();
    } else if (Auth::guard(getGuardNameMember())->check()) {
        return getGuardNameMember();
    } else {
        return getGuardNameUser();
    }
}

function getGuardNameAdmin(): ?string
{
    return config('common.guard_name_admin');
}

function getGuardNameMember(): ?string
{
    return config('common.guard_name_member');
}

function getGuardNameUser(): ?string
{
    return config('common.guard_name_user');
}

function getGuardTextAdmin(): ?string
{
    return config('common.guard_text_admin');
}

function getGuardTextMember(): ?string
{
    return config('common.guard_text_member');
}

function getGuardTextUser(): ?string
{
    return config('common.guard_text_user');
}
/* User - End */


/* Navigation - Begin */
function setSidebarActive(array $routes): ?string
{
    foreach ($routes as $route) {
        if (request()->routeIs($route)) {
            return 'active';
        }
    }

    return '';
}

function setSidebarOpen(array $routes): ?string
{
    foreach ($routes as $route) {
        if (request()->routeIs($route)) {
            return 'open';
        }
    }

    return '';
}
/* Navigation - End */


/* String Operation - Begin */
function truncateString(string $text, int $limit = 45): ?string
{
    return Str::limit($text, $limit, '...');
}

function capitalAllWord(string $text = null): ?string
{
    return $text != null ? Str::of($text)->upper() : '';
}

function capitalFirstLetter(string $text = null): ?string
{
    return $text != null ? Str::of($text)->ucfirst() : '';
}

function left($text, $length)
{
    return substr($text, 0, $length);
}

function right($text, $length)
{
    return substr($text, -$length);
}
/* String Operation - End */


/* Badge - Begin */
function setStatusAktifBadge($status)
{
    return $status == 1 ? 'success' : 'danger';
}

function setStatusAktifText($status)
{
    return $status == 1 ? __('Aktif') : __('Tidak Aktif');
}

function setStatusMembershipBadge($param_text)
{
    switch ($param_text) {
        case "Trial":
            return 'warning';
            break;
        case "Member":
            return 'success';
            break;
        default:
            echo 'primary';
    }
}

function setStatusBayarBadge($param_text)
{
    switch ($param_text) {
        case "paid":
            return 'bg-success';
            break;
        case "failed":
            return 'bg-danger';
            break;
        case "pending":
            return 'bg-warning';
            break;
        case "cancel":
            return 'bg-primary';
            break;
        default:
            echo 'bg-primary';
    }
}
/* Badge - End */


/* Database Operation - Begin */
function saveDateTimeNow()
{
    return Carbon::now()->addHour(7)->format('Y-m-d H:i:s');
}

function saveDateNow()
{
    return Carbon::now()->addHour(7)->format('Y-m-d');
}

function saveTimeNow()
{
    return Carbon::now()->addHour(7)->format('H:i:s');
}

function saveInputDateToTable($date)
{
    return date('Y-m-d', strtotime($date));
}

/**
 * Create document number
 *
 * @param  string $kode_transaksi = Code of Transaction
 * @param  int $bulan = Month of Transaction
 * @param  int $tahun = Year of Transaction
 * @param  int $nomor_terakhir = Current increment of document number transaction
 * @return string
 */
function last_doc_no($kode_transaksi, $bulan, $tahun)
{
    $count = DB::table('counter')
        ->where([['kode_transaksi', $kode_transaksi], ['bulan', intval($bulan)], ['tahun', $tahun]])
        ->max('nomor_terakhir');
    if ($count == 0) {
        $current_no = 1;
        DB::table('counter')->insert([
            [
                'kode_transaksi' => $kode_transaksi,
                'bulan' => intval($bulan),
                'tahun' => $tahun,
                'nomor_terakhir' => $current_no,
            ]
        ]);
    } else {
        $current_no = $count + 1;
        DB::table('counter')
            ->where([['kode_transaksi', $kode_transaksi], ['bulan', intval($bulan)], ['tahun', $tahun]])
            ->update(
                ['nomor_terakhir' => $current_no]
            );
    }

    return $current_no;

    // Format Doc : XX-MMYY-XXXX
    // return $kode_transaksi . '-' . right('0000' . $bulan, 2) . right($tahun, 2) . '-' . right('0000' . $current_no, 4);
}
/* Database Operation - End */


/* Format Data - Begin */
function formatDate($date = '')
{
    if (!is_null($date) && isset($date)) {
        $date_create = date_create($date);
        $formatDate = SettingSystem::where('key', 'default_date_format')->first();
        return date_format($date_create, $formatDate->value);
    }
}

function formatMonth($month_number)
{
    $month_name = array(
        1 =>
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );

    return $month_name[(int) $month_number];
}

function formatAmount($amount, $decimal = 0)
{
    $decimal_digit_amount = SettingSystem::where('key', 'decimal_digit_amount')->first();
    $decimal = $decimal == 0 ? (int)$decimal_digit_amount->value : $decimal;
    return number_format((float)$amount, $decimal, ',', '.');
}

function formatPercent($percent, $decimal = 0)
{
    $decimal_digit_percent = SettingSystem::where('key', 'decimal_digit_percent')->first();
    $decimal = $decimal == 0 ? (int)$decimal_digit_percent->value : $decimal;
    return number_format((float)$percent, $decimal, ',', '.');
}

function unformatAmount($str)
{
    $str = str_replace(".", "", $str);
    return (float) $str;
}
/* Format Data - End */


/* Setting - Begin */
function activePeriod(): ?String
{
    $setting_system = SettingSystem::pluck('value', 'key')->toArray();
    return $setting_system['tahun_periode_aktif'];
}
/* Setting - End */



// function docNoStore(): ?String
// {
//     $setting_system = SettingSystem::pluck('value', 'key')->toArray();
//     return $setting_system['kode_dokumen_store'];
// }

// function docNoSalesPerson(): ?String
// {
//     $setting_system = SettingSystem::pluck('value', 'key')->toArray();
//     return $setting_system['kode_dokumen_sales_person'];
// }

// function docNoCustomerVisit(): ?String
// {
//     $setting_system = SettingSystem::pluck('value', 'key')->toArray();
//     return $setting_system['kode_dokumen_customer_visit'];
// }

// function paramCustomerVisit($param): ?String
// {
//     $params = array("Lihat", "Tanya", "Coba", "Beli");
//     return $params[$param];
// }

// function getSession($param): ?String
// {
//     $params = array(
//         Session::get('sess_id_sales_person'),
//         Session::get('sess_kode_sales'),
//         Session::get('sess_nama_sales'),
//         Session::get('sess_id_store'),
//         Session::get('sess_kode_store'),
//         Session::get('sess_nama_store'),
//         Session::get('sess_kota_store'),
//     );
//     return $params[$param];
// }
