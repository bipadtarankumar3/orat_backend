<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app.generated::tTYcLQqmXgzxtrtX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app.generated::lqCrpI18HZXGU9IK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/exhibition_travel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app.generated::0btv3hvgXWZonvFH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/exhibition_hotel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app.generated::CCYBlxZhnFyfumw7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/exhibition_food' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app.generated::mREPdaioOWOHxGEK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/exhibition_fees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app.generated::ZWnSaLsSmTT4ZeEO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/exhibition_commission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app.generated::U0wlOtaBN8M2kUzK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/others_expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app.generated::L8KGvjLQzxjCgbZu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/banner_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/product-color' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::NsVHrarHAjdl5ClB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/product-size' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::VpZstoMIWF6S76IZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/category_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::x0IT37bG8JWIhZfj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/designer_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::0t5x8oP9FRBMmL7Q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/occassion_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::l9vuYXdEEhJNFpqV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/home_products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::8gTvkkmWYdJurOtG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::gfrlxiOVnXL2KlPI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::i6oHB4HS0ueJZdwT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::gDj6LJ2liAPuTeNy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::WlmN6xfwRvWNNkjk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/web/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::5iT0oDDXXQCEeReH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z7Va3NrYupycdKKX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-login-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fOgmbSdFrxM8OOOo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/enquiry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::OC3is4ovvEW2Zhpp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.generated::YGmy8kWIj9GL9Gmd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::oWivUW1HVm2WlYnE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_product_action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::B7bqk7Whg5kbNFVk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::2zUdd09zLS4es8HA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_product_type_form_html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::J6SqJ6zb3xdLUjFh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_product_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::HX7MCSWbFchsnEcM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/edit_product_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::zbXaF1J1rvkgk33s',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/designer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::bcS7dRAbwuOv7JxJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_designer_form_html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::IUaWRMM2Ssu2QD6e',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_designer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::5Wt0t64IFcoFlR7w',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/edit_designer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::RzOjV3ZXBzUDlziX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::wBERDyUWBHgduisH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_category_form_html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::uvQr78VNp5Kz4KWl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::udpbjZEjlsDWGeBI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/edit_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::dE9RMjdzpX7pjKhF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/size' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::9tzgF4zTigTm4Gd0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_size_form_html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::Xh3RCjBULdu8FRos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_size' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::1bnfYQihEbdkvtxF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/edit_size' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::fbopKdcDI6IL70RX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/color' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::01OOBReweNizJX22',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_color_form_html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::LhUXgYY2cTUqUdah',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_color' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::wqmk6ionGHRcVVas',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/edit_color' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::SjOyLpXmF8OcemOd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/occution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::8urj8XLOK0EeBZdj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_occution_form_html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::DJ9Nw03JHxNrNdMN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_occution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::jXS79o7JYG4tyuiS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/edit_occution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::Sq5OO7yw74nNn0Cc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/suboccution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::kZJB9u09DiBXWYs8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_suboccution_form_html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::thZZf4ar6SeQT72X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_suboccution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::9vKWbonyLUeRax7Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/edit_suboccution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::8d2M8KIFPzUB3rCv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/sub_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::RxFWqX3HfkpGw298',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_sub_category_form_html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::s3PLYJdhro1OOzX3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/add_sub_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::3oexpbouF5viSSnZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/edit_sub_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::n4NESfARbo8Cn7X5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::a26Vt4Qrsz7BvBm5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/inventory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::V2QOaO3nD9pExErC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/product/product_price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::XbujI3dS4FP3yNCR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/overview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::iTG7zv6imL8L5iLl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::1bhOGUdivFbh21HT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/address_and_billing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::aCeTYNlZETBeYMr6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/customer/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customer.generated::tOcGG4JEaEMhGkaf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.generated::e6WgYNmwBQQ1X5gQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.generated::43pX35qAqgWc8jtw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/update_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.generated::K9Mfw30uF47gWE9u',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order/user_order_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.generated::EF82AEYfc0cwiwA5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/referral/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/referral/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.generated::BAuuqO0IgUs6ExMD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/review/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/review/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.review.generated::oOmIU1URP4ME876y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/query/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.query.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/query/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.query.generated::Ep0Wv0IpZ5JVMErT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner/add_banner_form_html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.generated::73SZYyl6FOSiEZ58',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner/add_banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.generated::z7zE5hlLy6klSP8G',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/banner/edit_banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.generated::l418KVaOnEdV6Wb3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reports.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reports.generated::Vt4BUhCAyKfuQ8xQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reports.generated::9Sz89hOgghvQBFVw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/query' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::8fecYEkydx9NHvcF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/inventory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::8qvrOsbo6osLNkJB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/user/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::BkfTFf3tJpRQ5coc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/create/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::IAJvlShN4NiMXRq6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/sales/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::vreZSHaAbSi3Tjmr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/sales/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::j5wAORfjeN4WRWcb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/expense' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::54JlWLnU8ToSS09Q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::UegPVSIRpswcg7d1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::wfsUEXlbk6rHAycE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/model' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::SpJMSY9CqJjONq5p',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/staff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::MROW9HD4wrWv9XSM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/owner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::9qErhtkKJuqC3FQk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/exhibition/others' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.exhibition.generated::0ynpD6C7HYCIV4wc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.payment.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invoice/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invoice.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/invoice/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.invoice.generated::lbdHZTXuVyFzDaDn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/discount/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/discount/add_discount_form_html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.generated::jRflSpEEfHTqcZ0K',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/discount/add_discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.generated::YUNohDT9G5wJs8j0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/discount/edit_discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.generated::02fjubCL2ly68NhF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gift/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gift.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gift/add_gift_form_html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gift.generated::7xLVCvCbTHCnVkXV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gift/add_gift' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gift.generated::OM2pwBq8Ny0UrWew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gift/edit_gift' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gift.generated::8DZJRvNLy9Ezte9o',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/cms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.generated::G8y9AIEOb2DgCguF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.generated::MlM3hvOUlM37J9Ej',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/pyments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.generated::F348E8eYNU6tmvFi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.generated::JzfONpNPHbg7o3CX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/shipping_and_delivery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.generated::HszYo3rLvjWWWAMj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.generated::StmEBVa4HTbIr52j',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/setting/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.generated::1Nfeqw4FE2e26wDo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor-login-action' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::304hXHhCdM8E20iy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.generated::ylePHEMTCalF31LZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/my-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.generated::rzMOc24djMsNjzqs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.generated::jubAokY7WhXfzQWk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/reports/booking-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.reports.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/reports/enquiry_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.reports.generated::IcXugLZfjnG3a9fT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/booking/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.booking.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/user/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.user.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/payouts/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.payouts.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/hotel/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.hotel.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/hotel/add_hotel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.hotel.generated::bmQCIzloYykanCJI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/hotel/proprity_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.hotel.generated::oZ3S9dB9d3jMeVN9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/hotel/facility' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.hotel.generated::kuFXRnp7GYu95RYp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/hotel/hotel_service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.hotel.generated::2MzG39WCkR6TT8SC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/room/amenities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.room.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/room/type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.room.generated::Ga2HII9uCl3Ptjh5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/room/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.room.generated::HFXWc2ksXfmYwKDL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/room/addRoom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.room.generated::sTATLI3vDFDvUCL3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/room/avalibility' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.room.generated::WPV0jawCepiHQaf2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/experiance/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.experiance.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/experiance/add-new-tour' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.experiance.generated::LW1Nja98Zu71dIjB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/experiance/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.experiance.generated::D19OEc7dMj0lQSxb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/experiance/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.experiance.generated::BUW1PMDNpo6Iegf5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/a(?|pi/web/single\\-product/([^/]++)(*:143)|dmin/(?|product/(?|get\\-sub(?|categories/([^/]++)(*:200)|occution/([^/]++)(*:225))|delete_(?|product_type/([^/]++)(*:265)|designer/([^/]++)(*:290)|c(?|ategory/([^/]++)(*:318)|olor/([^/]++)(*:339))|s(?|ize/([^/]++)(*:364)|ub(?|occution/([^/]++)(*:394)|_category/([^/]++)(*:420)))|occution/([^/]++)(*:447)))|banner/delete/([^/]++)(*:479)|discount/delete_discount/([^/]++)(*:520)|gift/delete_gift/([^/]++)(*:553))))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'web.generated::545kq6AL2uJwdFyb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::ESk2eAD2ZOFRKTiA',
          ),
          1 => 
          array (
            0 => 'category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::nGfakzIBZtTozyFQ',
          ),
          1 => 
          array (
            0 => 'occution_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::CKmuWkmbcia9WpRG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::NmOv8VinDNQ4T1IK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      318 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::MKqRJX5NpV7dWGBZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::391NnWapzbQ0sRoI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      364 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::ieM9ViEe740AbQxZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::7sQOyUcXMCfm8rGN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::tJN5RjpAOuGgVCpD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.generated::fbcTJX4j76XL8vXf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.banner.generated::POrfpz5N5hXFCRk7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.discount.generated::x5GZ8gY9q01XXNCN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gift.generated::YlKNALogXQqji2zN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'middleware' => 'web',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/app/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\app_api\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\app_api\\UserController@login',
        'as' => 'app.',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app.generated::tTYcLQqmXgzxtrtX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\app_api\\UserController@logout',
        'controller' => 'App\\Http\\Controllers\\app_api\\UserController@logout',
        'as' => 'app.generated::tTYcLQqmXgzxtrtX',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app.generated::lqCrpI18HZXGU9IK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/app/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\app_api\\UserController@data',
        'controller' => 'App\\Http\\Controllers\\app_api\\UserController@data',
        'as' => 'app.generated::lqCrpI18HZXGU9IK',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app.generated::0btv3hvgXWZonvFH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/app/exhibition_travel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@exhibition_travel',
        'controller' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@exhibition_travel',
        'as' => 'app.generated::0btv3hvgXWZonvFH',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app.generated::CCYBlxZhnFyfumw7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/app/exhibition_hotel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@exhibition_hotel',
        'controller' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@exhibition_hotel',
        'as' => 'app.generated::CCYBlxZhnFyfumw7',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app.generated::mREPdaioOWOHxGEK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/app/exhibition_food',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@exhibition_food',
        'controller' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@exhibition_food',
        'as' => 'app.generated::mREPdaioOWOHxGEK',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app.generated::ZWnSaLsSmTT4ZeEO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/app/exhibition_fees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@exhibition_fees',
        'controller' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@exhibition_fees',
        'as' => 'app.generated::ZWnSaLsSmTT4ZeEO',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app.generated::U0wlOtaBN8M2kUzK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/app/exhibition_commission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@exhibition_commission',
        'controller' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@exhibition_commission',
        'as' => 'app.generated::U0wlOtaBN8M2kUzK',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app.generated::L8KGvjLQzxjCgbZu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/app/others_expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@others_expenses',
        'controller' => 'App\\Http\\Controllers\\app_api\\ExhibitionController@others_expenses',
        'as' => 'app.generated::L8KGvjLQzxjCgbZu',
        'namespace' => NULL,
        'prefix' => 'api/app',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/web/banner_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\GeneralController@banner_list',
        'controller' => 'App\\Http\\Controllers\\web_api\\GeneralController@banner_list',
        'as' => 'web.',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::NsVHrarHAjdl5ClB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/web/product-color',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\GeneralController@productColor',
        'controller' => 'App\\Http\\Controllers\\web_api\\GeneralController@productColor',
        'as' => 'web.generated::NsVHrarHAjdl5ClB',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::VpZstoMIWF6S76IZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/web/product-size',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\GeneralController@productSize',
        'controller' => 'App\\Http\\Controllers\\web_api\\GeneralController@productSize',
        'as' => 'web.generated::VpZstoMIWF6S76IZ',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::x0IT37bG8JWIhZfj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/web/category_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\GeneralController@category_list',
        'controller' => 'App\\Http\\Controllers\\web_api\\GeneralController@category_list',
        'as' => 'web.generated::x0IT37bG8JWIhZfj',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::0t5x8oP9FRBMmL7Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/web/designer_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\GeneralController@designer_list',
        'controller' => 'App\\Http\\Controllers\\web_api\\GeneralController@designer_list',
        'as' => 'web.generated::0t5x8oP9FRBMmL7Q',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::l9vuYXdEEhJNFpqV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/web/occassion_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\GeneralController@ProductOccutionList',
        'controller' => 'App\\Http\\Controllers\\web_api\\GeneralController@ProductOccutionList',
        'as' => 'web.generated::l9vuYXdEEhJNFpqV',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::8gTvkkmWYdJurOtG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/web/home_products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\ProductApiController@home_products',
        'controller' => 'App\\Http\\Controllers\\web_api\\ProductApiController@home_products',
        'as' => 'web.generated::8gTvkkmWYdJurOtG',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::gfrlxiOVnXL2KlPI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/web/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\ProductApiController@products',
        'controller' => 'App\\Http\\Controllers\\web_api\\ProductApiController@products',
        'as' => 'web.generated::gfrlxiOVnXL2KlPI',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::545kq6AL2uJwdFyb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/web/single-product/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\ProductApiController@singleProduct',
        'controller' => 'App\\Http\\Controllers\\web_api\\ProductApiController@singleProduct',
        'as' => 'web.generated::545kq6AL2uJwdFyb',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::i6oHB4HS0ueJZdwT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/web/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\web_api\\UserController@login',
        'as' => 'web.generated::i6oHB4HS0ueJZdwT',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::gDj6LJ2liAPuTeNy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/web/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\UserController@register',
        'controller' => 'App\\Http\\Controllers\\web_api\\UserController@register',
        'as' => 'web.generated::gDj6LJ2liAPuTeNy',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::WlmN6xfwRvWNNkjk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/web/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\UserController@logout',
        'controller' => 'App\\Http\\Controllers\\web_api\\UserController@logout',
        'as' => 'web.generated::WlmN6xfwRvWNNkjk',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'web.generated::5iT0oDDXXQCEeReH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/web/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\web_api\\UserController@data',
        'controller' => 'App\\Http\\Controllers\\web_api\\UserController@data',
        'as' => 'web.generated::5iT0oDDXXQCEeReH',
        'namespace' => NULL,
        'prefix' => 'api/web',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z7Va3NrYupycdKKX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000044b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Z7Va3NrYupycdKKX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminAuthController@login',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminAuthController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fOgmbSdFrxM8OOOo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-login-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminAuthController@adminLoginAction',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminAuthController@adminLoginAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fOgmbSdFrxM8OOOo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminAuthController@dashboard',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminAuthController@dashboard',
        'as' => 'admin.',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::OC3is4ovvEW2Zhpp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/enquiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminAuthController@enquiry',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminAuthController@enquiry',
        'as' => 'admin.generated::OC3is4ovvEW2Zhpp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.generated::YGmy8kWIj9GL9Gmd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminAuthController@logout',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminAuthController@logout',
        'as' => 'admin.generated::YGmy8kWIj9GL9Gmd',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@productList',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@productList',
        'as' => 'admin.product.',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::ESk2eAD2ZOFRKTiA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/get-subcategories/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@getSubCategories',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@getSubCategories',
        'as' => 'admin.product.generated::ESk2eAD2ZOFRKTiA',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::nGfakzIBZtTozyFQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/get-suboccution/{occution_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@getSuboccution',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@getSuboccution',
        'as' => 'admin.product.generated::nGfakzIBZtTozyFQ',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::oWivUW1HVm2WlYnE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@addProduct',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@addProduct',
        'as' => 'admin.product.generated::oWivUW1HVm2WlYnE',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::B7bqk7Whg5kbNFVk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/add_product_action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@add_product_action',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@add_product_action',
        'as' => 'admin.product.generated::B7bqk7Whg5kbNFVk',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::2zUdd09zLS4es8HA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@productTypeList',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@productTypeList',
        'as' => 'admin.product.generated::2zUdd09zLS4es8HA',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::J6SqJ6zb3xdLUjFh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/add_product_type_form_html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@add_product_type_form_html',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@add_product_type_form_html',
        'as' => 'admin.product.generated::J6SqJ6zb3xdLUjFh',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::HX7MCSWbFchsnEcM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/add_product_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@add_product_type',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@add_product_type',
        'as' => 'admin.product.generated::HX7MCSWbFchsnEcM',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::zbXaF1J1rvkgk33s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit_product_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@edit_product_type',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@edit_product_type',
        'as' => 'admin.product.generated::zbXaF1J1rvkgk33s',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::CKmuWkmbcia9WpRG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/delete_product_type/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@delete_product_type',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@delete_product_type',
        'as' => 'admin.product.generated::CKmuWkmbcia9WpRG',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::bcS7dRAbwuOv7JxJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/designer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DesignerController@designer',
        'controller' => 'App\\Http\\Controllers\\admin\\DesignerController@designer',
        'as' => 'admin.product.generated::bcS7dRAbwuOv7JxJ',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::IUaWRMM2Ssu2QD6e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/add_designer_form_html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DesignerController@add_designer_form_html',
        'controller' => 'App\\Http\\Controllers\\admin\\DesignerController@add_designer_form_html',
        'as' => 'admin.product.generated::IUaWRMM2Ssu2QD6e',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::5Wt0t64IFcoFlR7w' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/add_designer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DesignerController@add_designer',
        'controller' => 'App\\Http\\Controllers\\admin\\DesignerController@add_designer',
        'as' => 'admin.product.generated::5Wt0t64IFcoFlR7w',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::RzOjV3ZXBzUDlziX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit_designer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DesignerController@edit_designer',
        'controller' => 'App\\Http\\Controllers\\admin\\DesignerController@edit_designer',
        'as' => 'admin.product.generated::RzOjV3ZXBzUDlziX',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::NmOv8VinDNQ4T1IK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/delete_designer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DesignerController@delete_designer',
        'controller' => 'App\\Http\\Controllers\\admin\\DesignerController@delete_designer',
        'as' => 'admin.product.generated::NmOv8VinDNQ4T1IK',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::wBERDyUWBHgduisH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@category',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@category',
        'as' => 'admin.product.generated::wBERDyUWBHgduisH',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::uvQr78VNp5Kz4KWl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/add_category_form_html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@add_category_form_html',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@add_category_form_html',
        'as' => 'admin.product.generated::uvQr78VNp5Kz4KWl',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::udpbjZEjlsDWGeBI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/add_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@add_category',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@add_category',
        'as' => 'admin.product.generated::udpbjZEjlsDWGeBI',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::dE9RMjdzpX7pjKhF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@edit_category',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@edit_category',
        'as' => 'admin.product.generated::dE9RMjdzpX7pjKhF',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::MKqRJX5NpV7dWGBZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/delete_category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@delete_category',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@delete_category',
        'as' => 'admin.product.generated::MKqRJX5NpV7dWGBZ',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::9tzgF4zTigTm4Gd0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/size',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@size',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@size',
        'as' => 'admin.product.generated::9tzgF4zTigTm4Gd0',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::Xh3RCjBULdu8FRos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/add_size_form_html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_size_form_html',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_size_form_html',
        'as' => 'admin.product.generated::Xh3RCjBULdu8FRos',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::1bnfYQihEbdkvtxF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/add_size',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_size',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_size',
        'as' => 'admin.product.generated::1bnfYQihEbdkvtxF',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::fbopKdcDI6IL70RX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit_size',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@edit_size',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@edit_size',
        'as' => 'admin.product.generated::fbopKdcDI6IL70RX',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::ieM9ViEe740AbQxZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/delete_size/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@delete_size',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@delete_size',
        'as' => 'admin.product.generated::ieM9ViEe740AbQxZ',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::01OOBReweNizJX22' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/color',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@color',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@color',
        'as' => 'admin.product.generated::01OOBReweNizJX22',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::LhUXgYY2cTUqUdah' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/add_color_form_html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_color_form_html',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_color_form_html',
        'as' => 'admin.product.generated::LhUXgYY2cTUqUdah',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::wqmk6ionGHRcVVas' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/add_color',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_color',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_color',
        'as' => 'admin.product.generated::wqmk6ionGHRcVVas',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::SjOyLpXmF8OcemOd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit_color',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@edit_color',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@edit_color',
        'as' => 'admin.product.generated::SjOyLpXmF8OcemOd',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::391NnWapzbQ0sRoI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/delete_color/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@delete_color',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@delete_color',
        'as' => 'admin.product.generated::391NnWapzbQ0sRoI',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::8urj8XLOK0EeBZdj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/occution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@occution',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@occution',
        'as' => 'admin.product.generated::8urj8XLOK0EeBZdj',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::DJ9Nw03JHxNrNdMN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/add_occution_form_html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_occution_form_html',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_occution_form_html',
        'as' => 'admin.product.generated::DJ9Nw03JHxNrNdMN',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::jXS79o7JYG4tyuiS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/add_occution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_occution',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_occution',
        'as' => 'admin.product.generated::jXS79o7JYG4tyuiS',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::Sq5OO7yw74nNn0Cc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit_occution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@edit_occution',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@edit_occution',
        'as' => 'admin.product.generated::Sq5OO7yw74nNn0Cc',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::fbcTJX4j76XL8vXf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/delete_occution/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@delete_occution',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@delete_occution',
        'as' => 'admin.product.generated::fbcTJX4j76XL8vXf',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::kZJB9u09DiBXWYs8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/suboccution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@suboccution',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@suboccution',
        'as' => 'admin.product.generated::kZJB9u09DiBXWYs8',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::thZZf4ar6SeQT72X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/add_suboccution_form_html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_suboccution_form_html',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_suboccution_form_html',
        'as' => 'admin.product.generated::thZZf4ar6SeQT72X',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::9vKWbonyLUeRax7Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/add_suboccution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_suboccution',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@add_suboccution',
        'as' => 'admin.product.generated::9vKWbonyLUeRax7Z',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::8d2M8KIFPzUB3rCv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit_suboccution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@edit_suboccution',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@edit_suboccution',
        'as' => 'admin.product.generated::8d2M8KIFPzUB3rCv',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::7sQOyUcXMCfm8rGN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/delete_suboccution/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@delete_suboccution',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductGeneralController@delete_suboccution',
        'as' => 'admin.product.generated::7sQOyUcXMCfm8rGN',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::RxFWqX3HfkpGw298' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/sub_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@sub_category',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@sub_category',
        'as' => 'admin.product.generated::RxFWqX3HfkpGw298',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::s3PLYJdhro1OOzX3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/add_sub_category_form_html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@add_sub_category_form_html',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@add_sub_category_form_html',
        'as' => 'admin.product.generated::s3PLYJdhro1OOzX3',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::3oexpbouF5viSSnZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product/add_sub_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@add_sub_category',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@add_sub_category',
        'as' => 'admin.product.generated::3oexpbouF5viSSnZ',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::n4NESfARbo8Cn7X5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/edit_sub_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@edit_sub_category',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@edit_sub_category',
        'as' => 'admin.product.generated::n4NESfARbo8Cn7X5',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::tJN5RjpAOuGgVCpD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/delete_sub_category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@delete_sub_category',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@delete_sub_category',
        'as' => 'admin.product.generated::tJN5RjpAOuGgVCpD',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::a26Vt4Qrsz7BvBm5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@attributes',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@attributes',
        'as' => 'admin.product.generated::a26Vt4Qrsz7BvBm5',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::V2QOaO3nD9pExErC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/inventory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@inventory',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@inventory',
        'as' => 'admin.product.generated::V2QOaO3nD9pExErC',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.generated::XbujI3dS4FP3yNCR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/product_price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@product_price',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@product_price',
        'as' => 'admin.product.generated::XbujI3dS4FP3yNCR',
        'namespace' => NULL,
        'prefix' => 'admin/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CustomerController@customerList',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomerController@customerList',
        'as' => 'admin.customer.',
        'namespace' => NULL,
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::iTG7zv6imL8L5iLl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/overview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CustomerController@overview',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomerController@overview',
        'as' => 'admin.customer.generated::iTG7zv6imL8L5iLl',
        'namespace' => NULL,
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::1bhOGUdivFbh21HT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CustomerController@security',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomerController@security',
        'as' => 'admin.customer.generated::1bhOGUdivFbh21HT',
        'namespace' => NULL,
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::aCeTYNlZETBeYMr6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/address_and_billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CustomerController@address_and_billing',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomerController@address_and_billing',
        'as' => 'admin.customer.generated::aCeTYNlZETBeYMr6',
        'namespace' => NULL,
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customer.generated::tOcGG4JEaEMhGkaf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/customer/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CustomerController@notification',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomerController@notification',
        'as' => 'admin.customer.generated::tOcGG4JEaEMhGkaf',
        'namespace' => NULL,
        'prefix' => 'admin/customer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\OrderController@orderList',
        'controller' => 'App\\Http\\Controllers\\admin\\OrderController@orderList',
        'as' => 'admin.order.',
        'namespace' => NULL,
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.generated::e6WgYNmwBQQ1X5gQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\OrderController@details',
        'controller' => 'App\\Http\\Controllers\\admin\\OrderController@details',
        'as' => 'admin.order.generated::e6WgYNmwBQQ1X5gQ',
        'namespace' => NULL,
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.generated::43pX35qAqgWc8jtw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\OrderController@status',
        'controller' => 'App\\Http\\Controllers\\admin\\OrderController@status',
        'as' => 'admin.order.generated::43pX35qAqgWc8jtw',
        'namespace' => NULL,
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.generated::K9Mfw30uF47gWE9u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/update_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\OrderController@update_status',
        'controller' => 'App\\Http\\Controllers\\admin\\OrderController@update_status',
        'as' => 'admin.order.generated::K9Mfw30uF47gWE9u',
        'namespace' => NULL,
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.generated::EF82AEYfc0cwiwA5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/user_order_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\OrderController@user_order_list',
        'controller' => 'App\\Http\\Controllers\\admin\\OrderController@user_order_list',
        'as' => 'admin.order.generated::EF82AEYfc0cwiwA5',
        'namespace' => NULL,
        'prefix' => 'admin/order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ReferralController@referralList',
        'controller' => 'App\\Http\\Controllers\\admin\\ReferralController@referralList',
        'as' => 'admin.referral.',
        'namespace' => NULL,
        'prefix' => 'admin/referral',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.generated::BAuuqO0IgUs6ExMD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ReferralController@addreferral',
        'controller' => 'App\\Http\\Controllers\\admin\\ReferralController@addreferral',
        'as' => 'admin.referral.generated::BAuuqO0IgUs6ExMD',
        'namespace' => NULL,
        'prefix' => 'admin/referral',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ReviewController@reviewList',
        'controller' => 'App\\Http\\Controllers\\admin\\ReviewController@reviewList',
        'as' => 'admin.review.',
        'namespace' => NULL,
        'prefix' => 'admin/review',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.review.generated::oOmIU1URP4ME876y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/review/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ReviewController@addreview',
        'controller' => 'App\\Http\\Controllers\\admin\\ReviewController@addreview',
        'as' => 'admin.review.generated::oOmIU1URP4ME876y',
        'namespace' => NULL,
        'prefix' => 'admin/review',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.query.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/query/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ReviewController@queryList',
        'controller' => 'App\\Http\\Controllers\\admin\\ReviewController@queryList',
        'as' => 'admin.query.',
        'namespace' => NULL,
        'prefix' => 'admin/query',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.query.generated::Ep0Wv0IpZ5JVMErT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/query/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ReviewController@addreview',
        'controller' => 'App\\Http\\Controllers\\admin\\ReviewController@addreview',
        'as' => 'admin.query.generated::Ep0Wv0IpZ5JVMErT',
        'namespace' => NULL,
        'prefix' => 'admin/query',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BannerController@bannerList',
        'controller' => 'App\\Http\\Controllers\\admin\\BannerController@bannerList',
        'as' => 'admin.banner.',
        'namespace' => NULL,
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.generated::73SZYyl6FOSiEZ58' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/add_banner_form_html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BannerController@add_banner_form_html',
        'controller' => 'App\\Http\\Controllers\\admin\\BannerController@add_banner_form_html',
        'as' => 'admin.banner.generated::73SZYyl6FOSiEZ58',
        'namespace' => NULL,
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.generated::z7zE5hlLy6klSP8G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/banner/add_banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BannerController@add_banner',
        'controller' => 'App\\Http\\Controllers\\admin\\BannerController@add_banner',
        'as' => 'admin.banner.generated::z7zE5hlLy6klSP8G',
        'namespace' => NULL,
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.generated::l418KVaOnEdV6Wb3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/edit_banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BannerController@edit_banner',
        'controller' => 'App\\Http\\Controllers\\admin\\BannerController@edit_banner',
        'as' => 'admin.banner.generated::l418KVaOnEdV6Wb3',
        'namespace' => NULL,
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.banner.generated::POrfpz5N5hXFCRk7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/banner/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BannerController@delete',
        'controller' => 'App\\Http\\Controllers\\admin\\BannerController@delete',
        'as' => 'admin.banner.generated::POrfpz5N5hXFCRk7',
        'namespace' => NULL,
        'prefix' => 'admin/banner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reports.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ReportsController@salesReport',
        'controller' => 'App\\Http\\Controllers\\admin\\ReportsController@salesReport',
        'as' => 'admin.reports.',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reports.generated::Vt4BUhCAyKfuQ8xQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ReportsController@productReport',
        'controller' => 'App\\Http\\Controllers\\admin\\ReportsController@productReport',
        'as' => 'admin.reports.generated::Vt4BUhCAyKfuQ8xQ',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reports.generated::9Sz89hOgghvQBFVw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ReportsController@paymentReport',
        'controller' => 'App\\Http\\Controllers\\admin\\ReportsController@paymentReport',
        'as' => 'admin.reports.generated::9Sz89hOgghvQBFVw',
        'namespace' => NULL,
        'prefix' => 'admin/reports',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@list',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@list',
        'as' => 'admin.exhibition.',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::8fecYEkydx9NHvcF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/query',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@query',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@query',
        'as' => 'admin.exhibition.generated::8fecYEkydx9NHvcF',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::8qvrOsbo6osLNkJB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/inventory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@inventory',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@inventory',
        'as' => 'admin.exhibition.generated::8qvrOsbo6osLNkJB',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::BkfTFf3tJpRQ5coc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/user/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@ExhibitionUserlist',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@ExhibitionUserlist',
        'as' => 'admin.exhibition.generated::BkfTFf3tJpRQ5coc',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::IAJvlShN4NiMXRq6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/create/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@createUser',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@createUser',
        'as' => 'admin.exhibition.generated::IAJvlShN4NiMXRq6',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::vreZSHaAbSi3Tjmr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/sales/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@sales_list',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@sales_list',
        'as' => 'admin.exhibition.generated::vreZSHaAbSi3Tjmr',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::j5wAORfjeN4WRWcb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/sales/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@sales_create',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@sales_create',
        'as' => 'admin.exhibition.generated::j5wAORfjeN4WRWcb',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::54JlWLnU8ToSS09Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/expense',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@expense',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@expense',
        'as' => 'admin.exhibition.generated::54JlWLnU8ToSS09Q',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::UegPVSIRpswcg7d1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ReportsController@productReport',
        'controller' => 'App\\Http\\Controllers\\admin\\ReportsController@productReport',
        'as' => 'admin.exhibition.generated::UegPVSIRpswcg7d1',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::wfsUEXlbk6rHAycE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ReportsController@paymentReport',
        'controller' => 'App\\Http\\Controllers\\admin\\ReportsController@paymentReport',
        'as' => 'admin.exhibition.generated::wfsUEXlbk6rHAycE',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::SpJMSY9CqJjONq5p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/model',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@model_list',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@model_list',
        'as' => 'admin.exhibition.generated::SpJMSY9CqJjONq5p',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::MROW9HD4wrWv9XSM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@staff_list',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@staff_list',
        'as' => 'admin.exhibition.generated::MROW9HD4wrWv9XSM',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::9qErhtkKJuqC3FQk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/owner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@owner_list',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@owner_list',
        'as' => 'admin.exhibition.generated::9qErhtkKJuqC3FQk',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.exhibition.generated::0ynpD6C7HYCIV4wc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/exhibition/others',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ExhibitionController@others_list',
        'controller' => 'App\\Http\\Controllers\\admin\\ExhibitionController@others_list',
        'as' => 'admin.exhibition.generated::0ynpD6C7HYCIV4wc',
        'namespace' => NULL,
        'prefix' => 'admin/exhibition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.payment.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PaymentController@paymentList',
        'controller' => 'App\\Http\\Controllers\\admin\\PaymentController@paymentList',
        'as' => 'admin.payment.',
        'namespace' => NULL,
        'prefix' => 'admin/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invoice.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invoice/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\InvoiceController@invoiceList',
        'controller' => 'App\\Http\\Controllers\\admin\\InvoiceController@invoiceList',
        'as' => 'admin.invoice.',
        'namespace' => NULL,
        'prefix' => 'admin/invoice',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.invoice.generated::lbdHZTXuVyFzDaDn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/invoice/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\InvoiceController@invoicedetails',
        'controller' => 'App\\Http\\Controllers\\admin\\InvoiceController@invoicedetails',
        'as' => 'admin.invoice.generated::lbdHZTXuVyFzDaDn',
        'namespace' => NULL,
        'prefix' => 'admin/invoice',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.discount.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/discount/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DiscountController@discountList',
        'controller' => 'App\\Http\\Controllers\\admin\\DiscountController@discountList',
        'as' => 'admin.discount.',
        'namespace' => NULL,
        'prefix' => 'admin/discount',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.discount.generated::jRflSpEEfHTqcZ0K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/discount/add_discount_form_html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DiscountController@add_discount_form_html',
        'controller' => 'App\\Http\\Controllers\\admin\\DiscountController@add_discount_form_html',
        'as' => 'admin.discount.generated::jRflSpEEfHTqcZ0K',
        'namespace' => NULL,
        'prefix' => 'admin/discount',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.discount.generated::YUNohDT9G5wJs8j0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/discount/add_discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DiscountController@add_discount',
        'controller' => 'App\\Http\\Controllers\\admin\\DiscountController@add_discount',
        'as' => 'admin.discount.generated::YUNohDT9G5wJs8j0',
        'namespace' => NULL,
        'prefix' => 'admin/discount',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.discount.generated::02fjubCL2ly68NhF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/discount/edit_discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DiscountController@edit_discount',
        'controller' => 'App\\Http\\Controllers\\admin\\DiscountController@edit_discount',
        'as' => 'admin.discount.generated::02fjubCL2ly68NhF',
        'namespace' => NULL,
        'prefix' => 'admin/discount',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.discount.generated::x5GZ8gY9q01XXNCN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/discount/delete_discount/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DiscountController@delete_discount',
        'controller' => 'App\\Http\\Controllers\\admin\\DiscountController@delete_discount',
        'as' => 'admin.discount.generated::x5GZ8gY9q01XXNCN',
        'namespace' => NULL,
        'prefix' => 'admin/discount',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gift.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gift/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\GiftController@giftList',
        'controller' => 'App\\Http\\Controllers\\admin\\GiftController@giftList',
        'as' => 'admin.gift.',
        'namespace' => NULL,
        'prefix' => 'admin/gift',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gift.generated::7xLVCvCbTHCnVkXV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gift/add_gift_form_html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\GiftController@add_gift_form_html',
        'controller' => 'App\\Http\\Controllers\\admin\\GiftController@add_gift_form_html',
        'as' => 'admin.gift.generated::7xLVCvCbTHCnVkXV',
        'namespace' => NULL,
        'prefix' => 'admin/gift',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gift.generated::OM2pwBq8Ny0UrWew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gift/add_gift',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\GiftController@add_gift',
        'controller' => 'App\\Http\\Controllers\\admin\\GiftController@add_gift',
        'as' => 'admin.gift.generated::OM2pwBq8Ny0UrWew',
        'namespace' => NULL,
        'prefix' => 'admin/gift',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gift.generated::8DZJRvNLy9Ezte9o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gift/edit_gift',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\GiftController@edit_gift',
        'controller' => 'App\\Http\\Controllers\\admin\\GiftController@edit_gift',
        'as' => 'admin.gift.generated::8DZJRvNLy9Ezte9o',
        'namespace' => NULL,
        'prefix' => 'admin/gift',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gift.generated::YlKNALogXQqji2zN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gift/delete_gift/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\GiftController@delete_gift',
        'controller' => 'App\\Http\\Controllers\\admin\\GiftController@delete_gift',
        'as' => 'admin.gift.generated::YlKNALogXQqji2zN',
        'namespace' => NULL,
        'prefix' => 'admin/gift',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@profile',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@profile',
        'as' => 'admin.setting.',
        'namespace' => NULL,
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.generated::G8y9AIEOb2DgCguF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/cms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@cms',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@cms',
        'as' => 'admin.setting.generated::G8y9AIEOb2DgCguF',
        'namespace' => NULL,
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.generated::MlM3hvOUlM37J9Ej' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@store',
        'as' => 'admin.setting.generated::MlM3hvOUlM37J9Ej',
        'namespace' => NULL,
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.generated::F348E8eYNU6tmvFi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/pyments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@pyments',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@pyments',
        'as' => 'admin.setting.generated::F348E8eYNU6tmvFi',
        'namespace' => NULL,
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.generated::JzfONpNPHbg7o3CX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@checkout',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@checkout',
        'as' => 'admin.setting.generated::JzfONpNPHbg7o3CX',
        'namespace' => NULL,
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.generated::HszYo3rLvjWWWAMj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/shipping_and_delivery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@shipping_and_delivery',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@shipping_and_delivery',
        'as' => 'admin.setting.generated::HszYo3rLvjWWWAMj',
        'namespace' => NULL,
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.generated::StmEBVa4HTbIr52j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@location',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@location',
        'as' => 'admin.setting.generated::StmEBVa4HTbIr52j',
        'namespace' => NULL,
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.generated::1Nfeqw4FE2e26wDo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\AdminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@notification',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@notification',
        'as' => 'admin.setting.generated::1Nfeqw4FE2e26wDo',
        'namespace' => NULL,
        'prefix' => 'admin/setting',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@login',
        'controller' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'vendor.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::304hXHhCdM8E20iy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vendor-login-action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@vendorLoginAction',
        'controller' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@vendorLoginAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::304hXHhCdM8E20iy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@dashboard',
        'controller' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@dashboard',
        'as' => 'vendor.',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.generated::ylePHEMTCalF31LZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@logout',
        'controller' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@logout',
        'as' => 'vendor.generated::ylePHEMTCalF31LZ',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.generated::rzMOc24djMsNjzqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/my-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@myProfile',
        'controller' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@myProfile',
        'as' => 'vendor.generated::rzMOc24djMsNjzqs',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.generated::jubAokY7WhXfzQWk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@changePassword',
        'controller' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@changePassword',
        'as' => 'vendor.generated::jubAokY7WhXfzQWk',
        'namespace' => NULL,
        'prefix' => '/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.reports.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/reports/booking-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\ReportsController@bookingReports',
        'controller' => 'App\\Http\\Controllers\\vendor\\ReportsController@bookingReports',
        'as' => 'vendor.reports.',
        'namespace' => NULL,
        'prefix' => 'vendor/reports',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.reports.generated::IcXugLZfjnG3a9fT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/reports/enquiry_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\ReportsController@enquiry_report',
        'controller' => 'App\\Http\\Controllers\\vendor\\ReportsController@enquiry_report',
        'as' => 'vendor.reports.generated::IcXugLZfjnG3a9fT',
        'namespace' => NULL,
        'prefix' => 'vendor/reports',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.booking.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/booking/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\BookingHistoryController@BookingHistory',
        'controller' => 'App\\Http\\Controllers\\vendor\\BookingHistoryController@BookingHistory',
        'as' => 'vendor.booking.',
        'namespace' => NULL,
        'prefix' => 'vendor/booking',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.user.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/user/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@userList',
        'controller' => 'App\\Http\\Controllers\\vendor\\VendorAuthController@userList',
        'as' => 'vendor.user.',
        'namespace' => NULL,
        'prefix' => 'vendor/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.payouts.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/payouts/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\PayoutsController@payoutsList',
        'controller' => 'App\\Http\\Controllers\\vendor\\PayoutsController@payoutsList',
        'as' => 'vendor.payouts.',
        'namespace' => NULL,
        'prefix' => 'vendor/payouts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.hotel.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/hotel/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\HotelController@hotelList',
        'controller' => 'App\\Http\\Controllers\\vendor\\HotelController@hotelList',
        'as' => 'vendor.hotel.',
        'namespace' => NULL,
        'prefix' => 'vendor/hotel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.hotel.generated::bmQCIzloYykanCJI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/hotel/add_hotel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\HotelController@add_hotel',
        'controller' => 'App\\Http\\Controllers\\vendor\\HotelController@add_hotel',
        'as' => 'vendor.hotel.generated::bmQCIzloYykanCJI',
        'namespace' => NULL,
        'prefix' => 'vendor/hotel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.hotel.generated::oZ3S9dB9d3jMeVN9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/hotel/proprity_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\HotelController@proprity_type',
        'controller' => 'App\\Http\\Controllers\\vendor\\HotelController@proprity_type',
        'as' => 'vendor.hotel.generated::oZ3S9dB9d3jMeVN9',
        'namespace' => NULL,
        'prefix' => 'vendor/hotel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.hotel.generated::kuFXRnp7GYu95RYp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/hotel/facility',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\HotelController@facility',
        'controller' => 'App\\Http\\Controllers\\vendor\\HotelController@facility',
        'as' => 'vendor.hotel.generated::kuFXRnp7GYu95RYp',
        'namespace' => NULL,
        'prefix' => 'vendor/hotel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.hotel.generated::2MzG39WCkR6TT8SC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/hotel/hotel_service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\HotelController@hotel_service',
        'controller' => 'App\\Http\\Controllers\\vendor\\HotelController@hotel_service',
        'as' => 'vendor.hotel.generated::2MzG39WCkR6TT8SC',
        'namespace' => NULL,
        'prefix' => 'vendor/hotel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.room.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/room/amenities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\HotelController@roomamenities',
        'controller' => 'App\\Http\\Controllers\\vendor\\HotelController@roomamenities',
        'as' => 'vendor.room.',
        'namespace' => NULL,
        'prefix' => 'vendor/room',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.room.generated::Ga2HII9uCl3Ptjh5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/room/type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\HotelController@roomtype',
        'controller' => 'App\\Http\\Controllers\\vendor\\HotelController@roomtype',
        'as' => 'vendor.room.generated::Ga2HII9uCl3Ptjh5',
        'namespace' => NULL,
        'prefix' => 'vendor/room',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.room.generated::HFXWc2ksXfmYwKDL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/room/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\HotelController@roomList',
        'controller' => 'App\\Http\\Controllers\\vendor\\HotelController@roomList',
        'as' => 'vendor.room.generated::HFXWc2ksXfmYwKDL',
        'namespace' => NULL,
        'prefix' => 'vendor/room',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.room.generated::sTATLI3vDFDvUCL3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/room/addRoom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\HotelController@addRoom',
        'controller' => 'App\\Http\\Controllers\\vendor\\HotelController@addRoom',
        'as' => 'vendor.room.generated::sTATLI3vDFDvUCL3',
        'namespace' => NULL,
        'prefix' => 'vendor/room',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.room.generated::WPV0jawCepiHQaf2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/room/avalibility',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\HotelController@roomAvalibility',
        'controller' => 'App\\Http\\Controllers\\vendor\\HotelController@roomAvalibility',
        'as' => 'vendor.room.generated::WPV0jawCepiHQaf2',
        'namespace' => NULL,
        'prefix' => 'vendor/room',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.experiance.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/experiance/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\ExperianceController@experianceList',
        'controller' => 'App\\Http\\Controllers\\vendor\\ExperianceController@experianceList',
        'as' => 'vendor.experiance.',
        'namespace' => NULL,
        'prefix' => 'vendor/experiance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.experiance.generated::LW1Nja98Zu71dIjB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/experiance/add-new-tour',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\ExperianceController@addNewTour',
        'controller' => 'App\\Http\\Controllers\\vendor\\ExperianceController@addNewTour',
        'as' => 'vendor.experiance.generated::LW1Nja98Zu71dIjB',
        'namespace' => NULL,
        'prefix' => 'vendor/experiance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.experiance.generated::D19OEc7dMj0lQSxb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/experiance/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\ExperianceController@category',
        'controller' => 'App\\Http\\Controllers\\vendor\\ExperianceController@category',
        'as' => 'vendor.experiance.generated::D19OEc7dMj0lQSxb',
        'namespace' => NULL,
        'prefix' => 'vendor/experiance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.experiance.generated::BUW1PMDNpo6Iegf5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/experiance/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'App\\Http\\Middleware\\vendorAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\vendor\\ExperianceController@attributes',
        'controller' => 'App\\Http\\Controllers\\vendor\\ExperianceController@attributes',
        'as' => 'vendor.experiance.generated::BUW1PMDNpo6Iegf5',
        'namespace' => NULL,
        'prefix' => 'vendor/experiance',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
