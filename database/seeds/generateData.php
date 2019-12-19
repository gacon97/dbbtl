<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class generateData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 100;

        $role = [
            1 => 'Quản lý',
            2 => 'Nhân Viên'
        ];
        $sanBong = [
            'Sân bóng Đại học Công Đoàn',
            'Sân bóng Đại học Y',
            'Sân bóng Đại học Thủy Lợi',
            'Sân bóng Chùa Láng',
            'Sân bóng Ngoại Thương',
            'Sân bóng Học viện Ngân Hàng',
            'Sân bóng Thái Hà mới',
            'Sân Tao Đàn',
            'Sân Nguyễn Du',
            'Sân Đại học Y Dược',
            'Sân bóng Nhà Văn Hóa Thanh Niên',
            'Sân bóng đá Hoàng Phú',
        ];
        $diadiem = [
            '169 Tây Sơn',
            'Số 1 Tôn Thất Tùng',
            'Ngõ 95, Chùa Bộc',
            '112 Chùa Láng',
            '157 Chùa Láng',
            '12, Chùa Bộc',
            '69 Hoàng Cầu',
            '1 Huyền Trân Công Chúa, Phường Bến Thành, Quận 1, TP.HCM',
            '116 Nguyễn Du, Bến Thành, Quận 1, TP.HCM',
            '41 Đường Đinh Tiên Hoàng, Bến Nghé, TP.HCM',
            '4A Đường Phạm Ngọc Thạch, Phường Bến Nghé, Quận 1, TP.HCM',
            'Đường 447B, quận 1, TP Hồ Chí Minh',
        ];
        $khungGio = [
            4 => 6,
            6 => 8,
            8 => 10,
            10 => 12,
            12 => 14,
            14 => 16,
            16 => 18,
            18 => 20,
            20 => 22
        ];
        $matHang = [
            'Coca Cola chai lớn 1.5l',
            'Cocacola chai nhỏ 330ml',
            'Coca Cola lon 330ml',
            'Coca Cola chai thiếc nhập khẩu Mỹ',
            'Pepsi chai 1.5l',
            'Lốc trà xanh 0 độ 6 chai',
            'Trà xanh C2 chai 330ml',
            'trà xanh C2 500ml',
            'Chai 7up nhỏ 390ml',
            'Chai 7up lớn 1.5l',
            'thùng 7up 20 lon',
            'nước cam ép Twister chai',
            'nước cam ép Twister 6 chai 455ml',
            'thùng nước cam ép Mirinda 24 lon 330ml',
            'Chai Sting 330ml',
            'thùng nước sting 24 chai 330ml',
            'nước tăng lực number one',
            'nước bò húc red bull',

        ];
        $ncc= [
            'Công Ty TNHH Thực Phẩm & Nước Giải Khát A & B',
            'Công Ty TNHH IWATER',
            'Công Ty TNHH Nước Giải Khát DELTA',
            'Công Ty Cổ Phần Thực Phẩm Và Nước Giải Khát Dona NewTower',
            ' Công Ty TNHH Thực Phẩm Và Nước Giải Khát Rita',
            'Công Ty TNHH Đầu Tư Vifotex',
            'Công Ty TNHH Sản Xuất và Thương Mại Trường Đức Thịnh',
            'Nhà Máy Nước Khoáng Thạch Bích - Chi Nhánh Công Ty Cổ Phần Đường Quảng Ngãi',
        ];
        for ($i = 0; $i < $limit; $i++) {
            DB::table('tblNguoi')->insert([
                'HoTen' => $faker->name,
                'Email' => $faker->unique()->email,
                'DiaChi' => $faker->address,
                'SoDienThoai' => $faker->phoneNumber,
            ]);


            DB::table('tblTaiKhoan')->insert([
                'Username' => $faker->userName,
                'Password' => $faker->password,
                'Role' => $role[rand(1,2)],
            ]);

            DB::table('tblNguoiDung')->insert([
                'TaiKhoan_ID' => rand(1, 100),
                'Nguoi_ID' => rand(1, 100),
                'ChucVu' => $role[array_rand($role)],
                'Luong' => rand(1000000, 10000000),
            ]);

            DB::table('tblKhachHang')->insert([
                'SoCMT' => rand(192483748, 989384761),
                'Nguoi_ID' => $i+1,
            ]);


        }

        foreach($sanBong as $key => $san)
        {
            DB::table('tblSanBong')->insert([
                'Ten' => $san,
                'ChieuDai' => rand(50, 100),
                'ChieuRong' =>rand(20, 50),
                'GiaTien' => rand(1,9)*100000,
                'DiaDiem' => $diadiem[$key],
            ]);
        }

        foreach($khungGio as $key => $value)
        {
            DB::table('tblKhungGio')->insert([
                'GioBatDau' => \Carbon\Carbon::createFromTime($key),
                'GioKetThuc' => \Carbon\Carbon::createFromTime($value),

            ]);
        }

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tblPhieuDatSan')->insert([
                'SanBong_ID' => rand(1, 12),
                'KhachHang_ID' => rand(1, 100),
                'KhungGio_ID' => rand(1, 9),
                'NhanVien_ID' => 4,
                'QuanLy_ID' => 5,
                'NgayBatDau' => $faker->dateTimeBetween('-5years', 'now'),
                'NgayKetThuc' => $faker->dateTimeBetween('now', '+20days'),
                'TongTien' => rand(1,9)*1000000,
            ]);
        }

        foreach ($matHang as $hang)
        {
            DB::table('tblMatHang')->insert([
                'Ten' => $hang,
                'NgaySanXuat' => $faker->dateTimeBetween('-5years', 'now'),
                'Gia' => rand(1, 9)*1000,

            ]);
        }

        foreach ($ncc as $ncc1)
        {
            DB::table('tblNhaCungCap')->insert([
                'Ma' => strtolower($faker->text(5)).rand(100, 999),
                'Ten' => $ncc1,
                'Email' => $faker->unique()->email,
                'DiaChi' => $faker->address,
                'SDT' => $faker->phoneNumber,
            ]);
        }

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tblDanhSachNhapHangNCC')->insert([
                'NCC_ID' => rand(1,8),
                'MatHang_id' => rand(1, 18),
                'SoLuong' => rand(1, 100),
                'Gia' => rand(1,9)*100000,
            ]);
        }

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tblHoaDonNhapHang')->insert([
                'NhanVien_ID' => rand(1,8),
                'DanhSachNhapHangNCC_ID' => rand(1, 100),
                'NgayNhapHang' => $faker->dateTimeBetween('-5years', 'now'),
            ]);
        }
        for ($i = 0; $i < $limit; $i++) {
            DB::table('tblHoaDon')->insert([
                'NhanVien_ID' => rand(1,8),
                'PhieuDatSan_ID' => $i+1,
                'NgayThanhToan' => \Carbon\Carbon::now()->format('Y-m-d'),
            ]);
        }
        for ($i = 0; $i < $limit; $i++) {
            DB::table('tblPhieuCheckout')->insert([
                'gioNhanSan' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s','2018-05-10 03:28:37'),
                'gioTraSan' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s','2018-05-10 05:28:37'),
                'PhieuDatSan_ID' => rand(1,50),
            ]);
        }for ($i = 0; $i < $limit / 2; $i++) {
            DB::table('tblHoaDonPhatSinh')->insert([
                'SoLuong' => rand(1,3),
                'DonGia' => rand(1,9)*100000,
                'PhieuCheckout_ID' => $i,
                'MatHang_ID' => rand(1,18),
            ]);
        }
    }
}
