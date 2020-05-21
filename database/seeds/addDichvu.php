<?php

use Illuminate\Database\Seeder;

class addDichvu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $arr = [
        	[
        		'dv_ten' => 'Ăn trưa',
'dv_thongtin' => 'Nhà hàng sẽ mang đến cho bạn trải nghiệm ẩm thực Việt Nam khó quên, đồng thời thưởng thức các món ăn hòa quyện với vẻ đẹp của thiên nhiên và không khí trong lành của vùng nhiệt đới. Từ đơn giản đến tinh tế, những món ăn trang trí mắt này kích thích vị giác của bạn.
Ẩm thực Việt Nam nổi tiếng với sự thanh đạm nhưng vẫn giữ được hương vị tinh tế. Không chỉ vậy, món ăn có thể khiến bạn ngạc nhiên với sự kết hợp đặc biệt của các thành phần. Đại diện cho sự kết hợp tinh tế đó phải kể đến ẩm thực truyền thống Việt Nam. Nhờ khí hậu nhiệt đới, thảm thực vật phong phú đã cung cấp cho các món ăn Việt Nam sự lựa chọn các loại thảo mộc tốt cho sức khỏe. Ngoài ra, các phương pháp nấu ăn ban đầu đã được truyền lại từ các thế hệ trước cũng góp phần tạo nên hương vị của mỗi món ăn.
',
        		'dv_img' => 'DINING.jpg'
        	],[
        		'dv_ten' => 'Sự kiện',
        		'dv_thongtin' => 'Khi tổ chức đám cưới, hầu hết cô dâu chú rể và gia đình đều rất đau đầu với rất nhiều công việc phải chuẩn bị, và đôi khi không biết bắt đầu từ đâu để tổ chức đám cưới. thật hoàn hảo, đáng nhớ nhất
Đừng quá lo lắng, nếu bạn là một người không có kỹ năng tổ chức đám cưới hoặc bạn không có nhiều thời gian để lo lắng, hãy sắp xếp những vấn đề đó, lời khuyên tốt nhất là tìm kiếm các dịch vụ nhóm Tổ chức sự kiện để nhận được sự hỗ trợ tốt nhất từ AZ . 
Khách sạn là nhà tiên phong trong tổ chức sự kiện, đến với chúng tôi bạn sẽ được tư vấn, sự hỗ trợ tốt nhất với dịch vụ trọn gói ưu đãi chắc chắn sẽ làm bạn hài lòng. Với phương châm luôn lắng nghe và thấu hiểu khách hàng, khách sạn mang đến những lời khuyên phù hợp nhất cho đám cưới của bạn.
',
        		'dv_img' => 'EVENT.jpg'
        	],[
        		'dv_ten' => 'Spa',
        		'dv_thongtin' => 'Với đội ngũ nhân viên chuyên nghiệp có nhiều kinh nghiệm trong lĩnh vực massage & spa, chu đáo để tạo sự tin tưởng cao cho khách hàng. Khách sạn là một nơi để tận hưởng sự yên bình và tận hưởng liệu pháp mê hoặc từ những ngón tay thông qua liệu pháp massage 6 tay lơ lửng trên cơ thể. 
Khách sạn cam kết sử dụng các thành phần tự nhiên và hữu cơ để mang lại kết quả tốt nhất mà vẫn an toàn cho làn da của bạn. Chuyên sử dụng tất cả các loại dược phẩm, mỹ phẩm chất lượng cao với tinh chất tự nhiên, có chức năng chăm sóc da hoàn hảo nhất cho bạn.
',
        		'dv_img' => 'SPA.jpg'
        	]

        ];
        DB::table('slide')->insert($arr);
    }
}
