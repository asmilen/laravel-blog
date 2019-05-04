<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Trường :attribute phải được chấp nhận.',
    'active_url'           => 'Trường :attribute không phải là một hợp lệ URL.',
    'after'                => 'Trường :attribute phải là một ngày sau :date.',
    'after_or_equal'       => 'Trường :attribute phải là một ngày sau hoặc bằng với :date.',
    'alpha'                => 'Trường :attribute chỉ được phép chứa chữ cái.',
    'alpha_dash'           => 'Trường :attribute chỉ được phép chứa chữ cái, số, dấu gạch chéo và dấu gạch dưới.',
    'alpha_name'           => 'Trường :attribute phải được định dạng như một tên mà không có ký tự đặc biệt hoặc dấu chấm câu.',
    'alpha_num'            => 'Trường :attribute chỉ được phép chứa chữ cái và số.',
    'array'                => 'Trường :attribute phải là một mảng.',
    'before'               => 'Trường :attribute phải là một ngày trước :date.',
    'before_or_equal'      => 'Trường :attribute phải là một ngày trước hoặc bằng với :date.',
    'between'              => [
        'numeric' => 'Trường :attribute phải nằm giữa :min và :max.',
        'file'    => 'Trường :attribute phải nằm giữa :min và :max kilobytes.',
        'string'  => 'Trường :attribute phải nằm giữa :min và :max ký tự.',
        'array'   => 'Trường :attribute phải nằm giữa :min và :max phần tử.',
    ],
    'boolean'              => 'Trường :attribute field phải là đúng hoặc sai.',
    'confirmed'            => 'Trường :attribute confirmation không khớp.',
    'date'                 => 'Trường :attribute không phải là một ngày hợp lệ.',
    'date_format'          => 'Trường :attribute không khớp với định dạnh :format.',
    'different'            => 'Trường :attribute và :other phải khác nhau.',
    'digits'               => 'Trường :attribute phải có :digits số.',
    'digits_between'       => 'Trường :attribute phải có độ dài nằm giữa :min và :max số.',
    'dimensions'           => 'Trường :attribute có kích thước ảnh không hợp lệ.',
    'distinct'             => 'Trường :attribute field đã bị trùng giá trị.',
    'email'                => 'Trường :attribute phải là một email hợp lệ.',
    'exists'               => 'Trường selected :attribute không hợp lệ.',
    'file'                 => 'Trường :attribute phải là một file.',
    'filled'               => 'Trường :attribute phải được điền giá trị.',
    'gt'                   => [
        'numeric' => 'Trường :attribute phải lớn hơn :value.',
        'file'    => 'Trường :attribute phải lớn hơn :value kilobytes.',
        'string'  => 'Trường :attribute phải lớn hơn :value ký tự.',
        'array'   => 'Trường :attribute phải có more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'Trường :attribute phải lớn hơn hoặc bằng :value.',
        'file'    => 'Trường :attribute phải lớn hơn hoặc bằng :value kilobytes.',
        'string'  => 'Trường :attribute phải lớn hơn hoặc bằng :value ký tự.',
        'array'   => 'Trường :attribute phải có :value phần tử hoặc hơn.',
    ],
    'image'                => 'Trường :attribute phải là một ảnh.',
    'in'                   => 'Trường selected :attribute không hợp lệ.',
    'in_array'             => 'Trường :attribute không tồn tại trong :other.',
    'integer'              => 'Trường :attribute phải là một số nguyên.',
    'ip'                   => 'Trường :attribute phải một địa chỉ IP hợp lệ .',
    'ipv4'                 => 'Trường :attribute phải một địa chỉ IPv4 hợp lệ .',
    'ipv6'                 => 'Trường :attribute phải một địa chỉ IPv6 hợp lệ .',
    'json'                 => 'Trường :attribute phải một chuỗi JSON hợp lệ .',
    'lt'                   => [
        'numeric' => 'Trường :attribute phải nhỏ hơn :value.',
        'file'    => 'Trường :attribute phải nhỏ hơn :value kilobytes.',
        'string'  => 'Trường :attribute phải nhỏ hơn :value ký tự.',
        'array'   => 'Trường :attribute phải có nhỏ hơn :value items.',
    ],
    'lte'                  => [
        'numeric' => 'Trường :attribute phải nhỏ hơn hoặc bằng :value.',
        'file'    => 'Trường :attribute phải nhỏ hơn hoặc bằng :value kilobytes.',
        'string'  => 'Trường :attribute phải nhỏ hơn hoặc bằng :value ký tự.',
        'array'   => 'Trường :attribute không được có nhiều hơn :value items.',
    ],
    'max'                  => [
        'numeric' => 'Trường :attribute không được lớn hơn :max.',
        'file'    => 'Trường :attribute không được lớn hơn :max kilobytes.',
        'string'  => 'Trường :attribute không được lớn hơn :max ký tự.',
        'array'   => 'Trường :attribute không được có nhiều hơn :max phần tử.',
    ],
    'mimes'                => 'Trường :attribute phải là một định dạnh file: :values.',
    'mimetypes'            => 'Trường :attribute phải là một định dạnh file: :values.',
    'min'                  => [
        'numeric' => 'Trường :attribute phải có ít nhất :min.',
        'file'    => 'Trường :attribute phải có ít nhất :min kilobytes.',
        'string'  => 'Trường :attribute phải có ít nhất :min ký tự.',
        'array'   => 'Trường :attribute phải có ít nhất :min phần tử.',
    ],
    'not_in'               => 'Trường selected :attribute không hợp lệ.',
    'not_regex'            => 'Trường :attribute định dạng không hợp lệ.',
    'numeric'              => 'Trường :attribute phải là một số.',
    'present'              => 'Trường :attribute field phải tồn tại.',
    'regex'                => 'Trường :attribute format không hợp lệ.',
    'required'             => 'Trường :attribute field là bắt buộc.',
    'required_if'          => 'Trường :attribute field là bắt buộc khi :other là :value.',
    'required_unless'      => 'Trường :attribute field là bắt buộc trừ khi :other là trong :values.',
    'required_with'        => 'Trường :attribute field là bắt buộc khi :values tồn tại.',
    'required_with_all'    => 'Trường :attribute field là bắt buộc khi :values tồn tại.',
    'required_without'     => 'Trường :attribute field là bắt buộc khi :values không tồn tại.',
    'required_without_all' => 'Trường :attribute field là bắt buộc khi không có :values tồn tại.',
    'same'                 => 'Trường :attribute và :other phải khớp.',
    'size'                 => [
        'numeric' => 'Trường :attribute phải là :size.',
        'file'    => 'Trường :attribute phải là :size kilobytes.',
        'string'  => 'Trường :attribute phải là :size ký tự.',
        'array'   => 'Trường :attribute phải chứa :size items.',
    ],
    'string'               => 'Trường :attribute phải là một chuỗi.',
    'timezone'             => 'Trường :attribute phải một time zone hợp lệ.',
    'unique'               => 'Trường :attribute có giá trị đã tồn tại.',
    'uploaded'             => 'Trường :attribute tải lên không thành công.',
    'url'                  => 'Trường :attribute có định dạnh không hợp lệ.',
    'can_be_author'        => "Người dùng được chọn không được phép là tác gaiar",
    'current_password'     => "Trường mật khẩu hiện tại không hợp lệ.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'can_be_author' => [
            'accepted' => "Tác giả được chọn không hợp lệ.",
        ],
        'current_password' => [
            'accepted' => "Trường mật khẩu hiện tại không hợp lệ.",
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [
        'name'                  => 'Tên',
        'username'              => 'Tên người dùng',
        'email'                 => 'Email',
        'first_name'            => 'Tên',
        'last_name'             => 'Họ',
        'current_password'      => 'Mật khẩu hiện tại',
        'password'              => 'Mật khẩu',
        'password_confirmation' => 'Xác nhận Mật khẩu ',
        'city'                  => 'Thành phố',
        'country'               => 'Quốc gia',
        'address'               => 'Địa chỉ',
        'phone'                 => 'Số điện thoại',
        'mobile'                => 'Di động',
        'age'                   => 'Tuổi',
        'sex'                   => 'Giới tính',
        'gender'                => 'Giới tính',
        'day'                   => 'Ngày',
        'month'                 => 'Tháng',
        'year'                  => 'Năm',
        'hour'                  => 'Giờ',
        'minute'                => 'Phút',
        'second'                => 'Giây',
        'title'                 => 'Tiêu đề',
        'content'               => 'Nội dung',
        'description'           => 'Mô trả',
        'excerpt'               => 'Ngoại trừ',
        'date'                  => 'Ngày',
        'time'                  => 'Thời gian',
        'available'             => 'Khả dụng',
        'size'                  => 'Kích cỡ',
        'posted_at'             => 'Được đăng lúc',
        'author_id'             => 'Tác giả',
        'post_id'               => 'Bải viết',
        'thumbnail_id'          => 'Thumbnail',
    ],

    'errors' => ":count Lỗi : "

];
