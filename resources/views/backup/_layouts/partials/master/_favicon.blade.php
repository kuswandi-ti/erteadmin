<!-- Favicon -->
<link rel="icon"
    href="{{ !empty($setting_system['company_logo']) ? url(config('common.path_storage') . $setting_system['company_logo']) : url(config('common.path_template') . config('common.image_default_logo_company_main')) }}"
    type="image/png">
