# SỔ TAY CỦNG CỐ & HỆ THỐNG CÂU HỎI MỞ RỘNG KIẾN THỨC (INTERN ➔ JUNIOR)

> **Mục tiêu:** Tài liệu này không lặp lại các ví dụ đã có trong slide bài giảng, mà đóng vai trò là **Ngân hàng câu hỏi phản biện & tự kiểm tra (Question Bank)**.  
> **Cách học:** Đọc từng đầu mục ➔ Trả lời hàng loạt câu hỏi mở rộng ➔ Tra cứu tài liệu nếu chưa trả lời trôi chảy ➔ Đánh dấu `[x]` khi đã hoàn toàn làm chủ kiến thức.

---

## 🧭 MỤC LỤC TỔNG QUAN
1. [Phần 1: Bảng Tra Cứu Công Cụ (Tools) Thực Chiến – Khi Nào Nên Dùng?](#phần-1-bảng-tra-cứu-công-cụ-tools-thực-chiến--khi-nào-nên-dùng)
2. [Phần 2: Git Thực Chiến Toàn Diện (Bộ Lệnh Sống Còn Đi Làm Hàng Ngày)](#phần-2-git-thực-chiến-toàn-diện-bộ-lệnh-sống-còn-đi-làm-hàng-ngày)
3. [Phần 3: Cơ Sở Dữ Liệu & MySQL Chuyên Sâu](#phần-3-cơ-sở-dữ-liệu--mysql-chuyên-sâu)
4. [Phần 4: Backend, PHP 8+ & Laravel Request Lifecycle](#phần-4-backend-php-8-laravel-request-lifecycle)
5. [Phần 5: Kiến Trúc Hệ Thống & Giao Tiếp Dịch Vụ Hiện Đại](#phần-5-kiến-trúc-hệ-thống--giao-tiếp-dịch-vụ-hiện-đại)
6. [Phần 6: Giao Diện Người Dùng, Hạ Tầng Máy Chủ & Tư Duy Phỏng Vấn](#phần-6-giao-diện-người-dùng-hạ-tầng-máy-chủ--tư-duy-phỏng-vấn)

---

## PHẦN 1: BẢNG TRA CỨU CÔNG CỤ (TOOLS) THỰC CHIẾN – KHI NÀO NÊN DÙNG?

| Tên Công Cụ / Tiện Ích | Lĩnh Vực / Phạm Vi | Dùng Trong Tình Huống Nào? (Thời Điểm Sử Dụng) |
| :--- | :--- | :--- |
| **Prettier & ESLint** | VS Code Extension | Dùng tự động mỗi khi bấm `Ctrl + S`. Prettier chuẩn hóa thụt lề khoảng trắng, ESLint bắt lỗi cú pháp biến thừa, biến chưa khai báo. |
| **Error Lens** | VS Code Extension | Hiển thị thông báo lỗi và cảnh báo (warning) bằng chữ đỏ/vàng ngay cuối dòng code, giúp sửa lỗi cú pháp tức thì không cần nhìn tab Problems. |
| **GitLens** | VS Code Extension | Khi đọc code cũ dự án, soi `git blame` xem ai là người viết dòng code này, commit nào, ngày giờ nào và comment lý do gì. |
| **PHP Intelephense & PHP CS Fixer** | VS Code Extension | Gợi ý code PHP thông minh, nhảy nhanh đến định nghĩa hàm (`F12`), tự động format code theo chuẩn PSR-12 của cộng đồng PHP quốc tế. |
| **NVM (Node Version Manager)** | Quản lý Runtime | Khi chuyển đổi giữa dự án cũ (cần Node 16/18) và dự án mới (Node 20/22). Dùng lệnh `nvm use <version>` thay vì cài đè Node làm hỏng máy. |
| **Docker & Docker Compose** | Môi Trường Ảo Hóa | Khởi động toàn bộ Database (MySQL 8), Cache (Redis), Webserver chỉ bằng lệnh `docker compose up -d`. Đảm bảo máy cá nhân chạy giống hệt máy chủ Staging/Production. |
| **DBeaver / TablePlus / Navicat** | Quản Trị Cơ Sở Dữ Liệu | Mở xem cấu trúc bảng, kiểm tra khóa ngoại (Foreign Key), test chạy thử các câu truy vấn phức tạp và xem biểu đồ phân tích `EXPLAIN`. |
| **Xdebug (PHP Debugger)** | Điều Tra Lỗi Backend | Khi gặp lỗi logic phức tạp, vòng lặp lớn hoặc lỗi 500: cắm Breakpoint, Conditional Breakpoint để dừng chương trình, xem Call Stack và giá trị từng biến trong RAM. |
| **Chrome DevTools (Network Tab)** | Kiểm Tra Frontend / API | Soi request API nào bị đỏ 4xx/5xx, kiểm tra Payload gửi lên, Response trả về, thời gian chờ (Latency) và dùng tính năng **Replay XHR** để bắn lại request. |
| **Chrome DevTools (Application Tab)** | Kiểm Tra Lưu Trữ Web | Xem các Cookie đang lưu trên trình duyệt (kiểm tra cờ `HttpOnly`, `Secure`, `SameSite`), kiểm tra dữ liệu trong `LocalStorage` và `SessionStorage`. |
| **Postman / Insomnia** | Kiểm Thử API Độc Lập | Test độc lập API Backend trước khi viết code giao diện. Sử dụng Environments `{{base_url}}` để đổi môi trường. Sandbox thực hành: [https://postman-echo.com](https://postman-echo.com). Xuất cURL đính kèm ticket bug. |
| **Laravel Telescope / Debugbar** | Profiling Hiệu Năng | Bắt lỗi N+1 Query, đếm số lượng câu SQL chạy trên 1 trang web, đo thời gian thực thi, soi log Job, Mail, Event được kích hoạt ngầm. |
| **Jira / Redmine / Trello** | Quản Trị Tiến Độ Dự Án | Nhận việc chuyển `In Progress`, hoàn thành chuyển `Code Review`. Khai báo giờ làm việc (Log Work) mỗi ngày, comment lưu vết mọi thỏa thuận thay đổi logic. |
| **Ubuntu Linux Terminal (SSH)** | Vận Hành Máy Chủ Thật | Khi deploy ứng dụng lên server cloud, cấu hình Nginx, xem file log hệ thống thời gian thực bằng `tail -f`, phân quyền thư mục bằng `chmod`/`chown`. |
| **AI Antigravity Agentic Workflow** | Tăng Tốc Lập Trình | Dùng trước khi code: đưa specs vào phân tích `/brainstorming`, lập kế hoạch thay đổi, sinh mã nguồn tuân thủ Workspace Rules, tự động chạy lint và sinh mô tả Pull Request chuẩn. |

---

## PHẦN 2: GIT THỰC CHIẾN TOÀN DIỆN (BỘ LỆNH SỐNG CÒN ĐI LÀM HÀNG NGÀY)

### - [ ] 1. Nhánh & Lịch Sử Dự Án (`branch`, `switch`, `restore`, `log`, `blame`)
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Tại sao trong Git hiện đại, người ta khuyến khích dùng lệnh `git switch` và `git restore` thay vì dùng chung lệnh `git checkout` cho cả việc chuyển nhánh lẫn hủy file?
  2. Lệnh `git branch -d` và `git branch -D` khác nhau ở điểm nào? Trong trường hợp nào Git sẽ từ chối không cho em xóa nhánh bằng `-d`?
  3. Khi muốn xem toàn bộ cây lịch sử commit của tất cả các nhánh dưới dạng đồ họa 1 dòng trực quan ngay trên Terminal, em dùng cờ kết hợp nào của lệnh `git log`?
  4. Lệnh `git blame <file>` giúp ích gì khi em phát hiện một dòng code bị lỗi ngầm từ 6 tháng trước? Em làm sao để tìm ra đúng Pull Request đã merge dòng code đó?
  5. Khi nào em cần dùng lệnh `git clean -fd`? Lệnh này có nguy cơ xóa nhầm những file nào và làm sao để chạy thử (dry-run) kiểm tra trước khi xóa thật?

---

### - [ ] 2. Chuẩn Hóa Commit & Cải Tiến Lịch Sử (`Conventional Commits`, `commit --amend`)
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Theo chuẩn [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/), tiền tố `feat:`, `fix:`, `refactor:`, `chore:`, `docs:`, `perf:` được quy định sử dụng trong những tình huống cụ thể nào?
  2. Tại sao một commit message tốt không nên ghi *"Fix bug"* hay *"Update code"*, mà phải mô tả rõ mục đích và lý do thay đổi?
  3. Em vừa gõ commit xong thì phát hiện quên chưa thêm file cấu hình hoặc gõ sai chính tả nội dung commit message, lệnh `git commit --amend` giúp em giải quyết ra sao mà không làm phát sinh thêm commit mới?
  4. **Câu hỏi cảnh báo:** Nếu commit đó đã được `git push` lên nhánh chung trên GitHub/GitLab, việc em chạy `git commit --amend` rồi cố tình đẩy lên lại sẽ gây ra hậu quả gì cho những đồng nghiệp đang làm việc trên cùng nhánh đó?

---

### - [ ] 3. Tạm Cất Code Dở Dang (`git stash`)
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Đang code dở 100 dòng (chưa xong, chưa thể commit) thì Tech Lead yêu cầu checkout sang nhánh khác sửa gấp hotfix production, nếu không dùng stash em sẽ phải làm cách thủ công nguy hiểm nào?
  2. Sự khác biệt giữa `git stash` thông thường và `git stash -u` (hoặc `--include-untracked`) là gì? Tại sao nếu không có cờ `-u`, các file mới tạo (chưa add vào Git) sẽ bị bỏ lại thư mục làm việc?
  3. Lệnh `git stash pop` khác với lệnh `git stash apply` như thế nào? Trong tình huống nào em nên dùng `apply` thay vì `pop`?
  4. Nếu em đã gõ `git stash` nhiều lần trong tuần, lệnh nào giúp em liệt kê danh sách các ngăn tủ (`stash list`) và lệnh nào giúp em xóa hẳn một ngăn tủ cũ không còn dùng nữa (`stash drop`)?
  5. Có bao giờ em gặp tình huống khi chạy `git stash pop` lại bị Merge Conflict không? Khi đó code dở dang và code trên nhánh sẽ được Git xử lý như thế nào?

---

### - [ ] 4. Nhặt Commit Chọn Lọc (`git cherry-pick`)
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Tình huống nào bắt buộc phải dùng `git cherry-pick` thay vì dùng lệnh `git merge` cả nhánh của đồng nghiệp?
  2. Làm sao để bốc một chuỗi gồm 3 commit liên tiếp từ nhánh `feature-A` sang nhánh `feature-B` bằng cherry-pick?
  3. Khi chạy `git cherry-pick <commit-hash>` mà bị xung đột code (Conflict), các bước xử lý từng bước tiếp theo là gì? Lệnh `git cherry-pick --abort` dùng để làm gì?
  4. Tại sao commit sau khi được cherry-pick sang nhánh mới lại có **Mã Hash SHA-1 khác hoàn toàn** so với commit gốc ở nhánh cũ dù nội dung code giống hệt nhau?

---

### - [ ] 5. Hóa Giải Xung Đột Nhánh: `git merge` vs `git rebase`
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Bóc tách bản chất: Tại sao `git merge` lại sinh ra một commit gộp (Merge Commit) có 2 commit cha, trong khi `git rebase` lại nhổ từng commit ra tạo thành các commit mới tinh với hash mới?
  2. Khi nào nên dùng `git merge` và khi nào nên dùng `git rebase`? Tại sao nhiều công ty công nghệ lớn bắt buộc các nhánh `feature` phải rebase trước khi tạo Pull Request?
  3. **Quy tắc vàng của Rebase:** Tại sao tuyệt đối cấm kỵ chạy `git rebase` trên các nhánh dùng chung như `main` hay `develop`? Nếu vi phạm, điều gì sẽ xảy ra với máy của các thành viên khác trong team?
  4. Lệnh `git pull --rebase origin develop` khác gì với lệnh `git pull origin develop` thông thường? Tại sao lệnh này giúp nhánh của em tránh được các commit rác *"Merge branch 'develop' into feature..."*?
  5. Khi đang rebase mà gặp Conflict ở commit thứ 2 trong số 5 commit, em sửa conflict xong thì phải gõ lệnh gì tiếp theo? Tại sao lúc này cấm không được gõ `git commit`?

---

### - [ ] 6. Cỗ Máy Thời Gian: Làm Chủ `git reset` (--soft, --mixed, --hard)
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Git quản lý 3 vùng làm việc: **Working Directory** (ổ cứng), **Staging Area / Index** (sau khi `git add`), và **Commit History** (sau khi `git commit`). Hãy phân tích chính xác từng vùng nhớ này bị thay đổi như thế nào khi chạy:
     - `git reset --soft HEAD~1`
     - `git reset --mixed HEAD~1` (mặc định)
     - `git reset --hard HEAD~1`
  2. Khi em lỡ tay commit một file nhạy cảm (chứa mật khẩu Database hoặc API Key bí mật) nhưng chưa push lên remote, chế độ reset nào giúp em rút commit lại một cách an toàn nhất để loại bỏ file đó ra?
  3. Tại sao `git reset --hard` được coi là **"Nút Tự Hủy"**? Có cách nào cứu lại code nếu lỡ tay gõ `--hard` nhầm hay không (tìm hiểu về `git reflog`)?

---

### - [ ] 7. Hủy Bỏ Thay Đổi An Toàn Trên Nhánh Chung: `git revert`
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Phân biệt bản chất sâu sắc giữa `git reset` và `git revert`?
  2. Khi một tính năng đã được deploy lên nhánh `production` hoặc `develop` chung của cả công ty nhưng bị lỗi nghiêm trọng cần gỡ bỏ khẩn cấp, tại sao bắt buộc phải dùng `git revert` mà tuyệt đối không được dùng `git reset`?
  3. Lệnh `git revert <commit-hash>` hoạt động theo cơ chế nào ở tầng commit graph?

---

### - [ ] 8. Đẩy Code Lên Máy Chủ An Toàn: `git push --force-with-lease`
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Sau khi rebase hoặc sửa commit bằng `--amend`, tại sao lệnh `git push` thông thường sẽ bị máy chủ GitHub từ chối với thông báo *"Updates were rejected because the tip of your current branch is behind"*?
  2. Lệnh `git push --force` (hoặc `-f`) nguy hiểm chết người như thế nào nếu có đồng nghiệp vừa đẩy thêm commit mới lên nhánh đó trong lúc em đang làm việc?
  3. Lệnh `git push --force-with-lease` bảo vệ em và đồng nghiệp ra sao? Cơ chế kiểm tra Lease (kiểm tra đỉnh ref trước khi ghi đè) của nó hoạt động như thế nào?

---

### - [ ] 9. Tự Động Truy Vết Bug Bằng Thuật Toán: `git bisect`
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Giả sử dự án có lịch sử 500 commit, phiên bản hôm nay bị lỗi nhưng phiên bản 2 tuần trước chạy hoàn toàn bình thường. Nếu kiểm tra thủ công từng commit sẽ tốn hàng ngày trời. Thuật toán **Tìm Kiếm Nhị Phân (Binary Search)** của `git bisect` giúp em tìm ra chính xác commit gây lỗi sau tối đa bao nhiêu lần test?
  2. Các bước vận hành một phiên `git bisect`: `git bisect start`, `git bisect bad`, `git bisect good <commit>`, và cách kết thúc phiên bằng `git bisect reset`?

---

## PHẦN 3: CƠ SỞ DỮ LIỆU & MYSQL CHUYÊN SÂU

### - [ ] 10. Tư Duy Truy Vấn & Các Loại JOIN
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Cho 2 bảng `Users` và `Orders`. Hãy giải thích sự khác biệt về kết quả đầu ra khi dùng `INNER JOIN`, `LEFT JOIN`, `RIGHT JOIN`, và `FULL OUTER JOIN`?
  2. **Bẫy kinh điển trong SQL:** Nếu em dùng `LEFT JOIN` từ bảng `Users` sang bảng `Orders`, nhưng ở mệnh đề `WHERE` em lại lọc `WHERE orders.created_at >= '2026-01-01'`, tại sao câu truy vấn này vô tình bị biến chất trở thành `INNER JOIN` làm mất sạch các user chưa có đơn hàng? Cách khắc phục như thế nào (đưa điều kiện vào `ON` thay vì `WHERE`)?
  3. Khi nào nên dùng Subquery và khi nào nên dùng JOIN? Về mặt hiệu năng thực thi (Query Execution Plan), Database Engine tối ưu dạng nào tốt hơn?
  4. Toán tử `IN (...)` và `EXISTS (...)` khác nhau như thế nào về cơ chế chạy? Khi nào `EXISTS` chạy nhanh hơn vượt trội so với `IN`?

---

### - [ ] 11. Tối Ưu Hiệu Năng Bảng Triệu Dòng: Sức Mạnh INDEX & Cây B-Tree
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Thế nào là **Full Table Scan**? Tại sao khi bảng có từ vài triệu dòng trở lên, việc quét toàn bộ bảng lại làm CPU máy chủ chạm ngưỡng 100% và gây sập web?
  2. Cơ sở dữ liệu MySQL sử dụng cấu trúc dữ liệu **B-Tree** (hoặc B+Tree) để đánh Index như thế nào? Tại sao độ phức tạp tìm kiếm của nó lại đạt xấp xỉ $O(\log N)$ thay vì $O(N)$?
  3. **Composite Index (Index đa cột):** Nếu em đánh index trên cặp cột `(status, created_at)`, câu lệnh `WHERE created_at = '2026-09-01'` (không có `status`) có tận dụng được index này hay không? Quy tắc **Leftmost Prefix** (Tiền tố bên trái) là gì?
  4. Lệnh `EXPLAIN` trước câu truy vấn SQL cung cấp những thông số vàng nào? Các giá trị trong cột `type` (`ALL`, `index`, `range`, `ref`, `eq_ref`, `const`) thể hiện cấp độ hiệu năng từ tệ nhất đến tốt nhất ra sao?
  5. Đánh Index giúp tăng tốc độ đọc (`SELECT`), nhưng nó gây ảnh hưởng tiêu cực gì đến tốc độ ghi dữ liệu (`INSERT`, `UPDATE`, `DELETE`) và dung lượng ổ cứng? Tại sao không nên đánh index bừa bãi lên mọi cột?

---

### - [ ] 12. An Toàn Dữ Liệu Cốt Lõi: MySQL TRANSACTION & Khóa Dữ Liệu (Locking)
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Hãy giải thích 4 tính chất sống còn của chuẩn **ACID** trong hệ quản trị cơ sở dữ liệu:
     - **A** (Atomicity - Tính nguyên tử)
     - **C** (Consistency - Tính nhất quán)
     - **I** (Isolation - Tính cô lập)
     - **D** (Durability - Tính bền vững)
  2. Bóc tách cơ chế: Khi gõ `START TRANSACTION`, MySQL làm gì với cờ `autocommit`? Dữ liệu thay đổi nằm ở đâu trước khi lệnh `COMMIT` được thực thi?
  3. Nếu câu lệnh số 1 trong Transaction chạy thành công nhưng câu lệnh số 2 bị lỗi đứt kết nối hoặc vi phạm khóa ngoại, tại sao khối lệnh `try...catch` trong Backend bắt buộc phải gọi `ROLLBACK`?
  4. **Tình huống nâng cao (Race Condition / Bán vượt kho hàng):** Hai khách hàng cùng bấm mua 1 sản phẩm cuối cùng trong kho tại cùng 1 phần nghìn giây. Cả hai đều đọc thấy `stock = 1` và đều trừ thành công khiến kho bị âm `-1`. Khái niệm **Pessimistic Locking** (Khóa bi quan với cú pháp `SELECT ... FOR UPDATE`) giải quyết bài toán này ra sao?

---

## PHẦN 4: BACKEND, PHP 8+ & LARAVEL REQUEST LIFECYCLE

### - [ ] 13. Nền Tảng PHP 8+ Hiện Đại
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Tại sao ở đầu mỗi file PHP chuyên nghiệp luôn bắt buộc khai báo `declare(strict_types=1);`? Sự khác biệt giữa chế độ ép kiểu lỏng lẻo (coercive) và chặt chẽ (strict) là gì?
  2. Tính năng **Constructor Property Promotion** trong PHP 8 giúp rút ngắn code khởi tạo class từ 15 dòng xuống còn 3 dòng như thế nào?
  3. Toán tử **Nullsafe Operator (`?->`)** trong PHP 8 giúp em loại bỏ các câu lệnh lồng nhau kiểm tra `if ($order !== null && $order->getUser() !== null)` ra sao?
  4. Thế nào là tư duy xử lý ngoại lệ (Exception Handling) bài bản? Khối `finally` có đặc tính gì đặc biệt ngay cả khi khối `try` hoặc `catch` đã có lệnh `return`?

---

### - [ ] 14. OOP Thực Chiến: Những Gì Cần Thiết Để Đi Làm
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. **Interface vs Abstract Class:** Khi nào bắt buộc phải dùng Interface? Tại sao nói Interface là bản hợp đồng cam kết giúp code tuân thủ nguyên lý **DIP (Dependency Inversion Principle)** trong SOLID?
  2. **Dependency Injection (DI) & IoC Container:** Tại sao đi làm người ta cấm gõ `new PaymentService()` bên trong hàm của Controller? Cơ chế tự động tiêm (Auto-wiring) của Service Container trong Laravel hoạt động dựa trên cơ chế Reflection như thế nào?
  3. Khi viết Unit Test cho Controller, việc áp dụng Dependency Injection giúp em dễ dàng thay thế Service thật bằng **Mock Object** (đối tượng giả lập) như thế nào để không gửi email thật hay trừ tiền thật khi chạy test?
  4. **Trait:** Trait giải quyết vấn đề đa kế thừa trong PHP ra sao? Khi 2 Trait cùng có một hàm trùng tên được đưa vào một Class, PHP sẽ báo lỗi gì và cách giải quyết xung đột bằng từ khóa `insteadof` như thế nào?
  5. **Tính Đóng Gói (Encapsulation):** Tại sao việc để thuộc tính class ở dạng `public` là một thiết kế tồi? Việc bắt buộc truy xuất qua getter/setter hoặc method nghiệp vụ bảo vệ tính toàn vẹn của dữ liệu ra sao?

---

### - [ ] 15. Vòng Đời Của Một Request Trong Laravel (6 Bước Cốt Lõi)
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Hãy trình bày trơn tru theo thứ tự hành trình của 1 HTTP Request bay từ trình duyệt đến máy chủ Laravel:
     `public/index.php` ➔ `HTTP Kernel` ➔ `Service Providers` ➔ `Routing & Middleware` ➔ `Controller & FormRequest` ➔ `Response`.
  2. **Bắt bệnh hệ thống:**
     - Nếu ứng dụng bị lỗi chặn CORS (Cross-Origin Resource Sharing), em sẽ tìm cấu hình ở Middleware hay Controller?
     - Nếu em muốn nạp một biến cấu hình toàn cục hoặc cấu hình kết nối một dịch vụ thứ ba ngay khi app khởi động, em sẽ viết vào hàm `register()` hay `boot()` của Service Provider nào?
  3. Phân biệt rõ hai hàm `register()` và `boot()` trong một Service Provider: Hàm nào chạy trước, hàm nào chạy sau và quy tắc cấm kỵ khi viết code trong hàm `register()` là gì?
  4. Lớp **FormRequest** trong Laravel chạy trước hay sau khi request bước vào Controller? Nếu dữ liệu validate bị sai, FormRequest sẽ tự động xử lý trả về response gì cho API và cho Form web truyền thống?

---

### - [ ] 16. Tối Ưu Truy Vấn Eloquent: Phát Hiện & Triệt Tiêu Lỗi N+1 Query
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Lỗi N+1 Query là gì? Hãy mô tả một kịch bản code giao diện danh sách bài viết kèm tên tác giả khiến cho hệ thống phải thực thi tới 101 câu query vào DB chỉ để hiển thị 100 bài viết?
  2. Kỹ thuật **Eager Loading** với phương thức `with(['author', 'category'])` giải quyết bài toán trên theo cơ chế nào ở tầng SQL (sử dụng toán tử `WHERE id IN (...)` ra sao)?
  3. Sự khác nhau giữa **Eager Loading (`with()`)** và **Lazy Eager Loading (`load()`)** là gì? Trong tình huống nào em bắt buộc phải dùng `load()`?
  4. Làm thế nào để cấu hình Laravel tự động ném ra Exception cảnh báo ngay trên môi trường Local nếu lập trình viên vô tình viết code dính lỗi N+1 (`Model::preventLazyLoading(! app()->isProduction())`)?

---

### - [ ] 17. 5 Nguyên Lý Thiết Kế Hướng Đối Tượng SOLID Thực Chiến
* **S – Single Responsibility Principle (SRP - Đơn trách nhiệm):**
  - *Bản chất:* 1 Class chỉ nên có một lý do duy nhất để thay đổi.
  - 1. Thế nào là một "God Controller" hay "Fat Model"? Nếu một Controller vừa nhận HTTP request, vừa validate dữ liệu, vừa tính toán tiền, vừa query DB, vừa gửi email thì khi sửa logic gửi email, nguy cơ gì sẽ xảy ra?
  - 2. Trong Laravel, các kỹ thuật như FormRequest, Service Layer, Repository Pattern và Notification Event giúp chia tách trách nhiệm theo chuẩn SRP như thế nào?
* **O – Open/Closed Principle (OCP - Mở để mở rộng, Đóng để sửa đổi):**
  - *Bản chất:* Khi có yêu cầu mới, hãy viết thêm Class mới chứ không nhảy vào sửa đập phá code cũ đang chạy ổn định.
  - 3. Chuỗi lệnh `switch/case` hoặc `if/else` dài dằng dặc để chọn cổng thanh toán (VNPay, MoMo, ZaloPay, Stripe) vi phạm nguyên lý OCP ra sao? Mỗi khi thêm cổng thứ 5, em phải sửa code cũ ở đâu?
  - 4. Thiết kế hệ thống xuất báo cáo (Excel, PDF, CSV) như thế nào để khi sếp yêu cầu thêm định dạng XML, em không cần sửa 1 dòng code nào trong Controller hiện tại?
* **L – Liskov Substitution Principle (LSP - Thay thế Liskov):**
  - *Bản chất:* Class con phải có khả năng thay thế hoàn toàn cho Class cha mà không làm hỏng tính đúng đắn của chương trình.
  - 5. Bài toán kinh điển: Tại sao cho Class Hình Vuông (`Square`) kế thừa Class Hình Chữ Nhật (`Rectangle`) lại vi phạm nghiêm trọng nguyên lý Liskov?
  - 6. Nếu một Class con kế thừa từ cha nhưng ở một hàm nào đó nó lại quăng ra `throw new Exception("Tính năng này không hỗ trợ")` hoặc trả về kiểu dữ liệu khác với cha thì điều này vi phạm LSP ra sao?
* **I – Interface Segregation Principle (ISP - Phân tách Interface):**
  - *Bản chất:* Thà có nhiều Interface nhỏ, chuyên biệt còn hơn 1 "Fat Interface" khổng lồ bắt class phải implement những hàm vô nghĩa mà nó không dùng.
  - 7. Giả sử có `WorkerInterface` gồm 2 hàm: `work()` và `eat()`. Khi viết class `RobotWorker` implement interface này, vấn đề gì sẽ phát sinh?
  - 8. Hãy quan sát trong Laravel: Tại sao framework không tạo 1 interface `UserInterface` khổng lồ mà tách nhỏ thành `Authenticatable`, `Authorizable`, `CanResetPassword`, `MustVerifyEmail`?
* **D – Dependency Inversion Principle (DIP - Đảo ngược phụ thuộc):**
  - *Bản chất:* Module cấp cao (Controller) không phụ thuộc vào Module cấp thấp (MySQL cụ thể, SendGrid cụ thể); cả hai phải phụ thuộc vào Abstraction (Interface).
  - 9. Phân biệt rõ sự khác nhau giữa 3 khái niệm rất hay bị hỏi trong phỏng vấn:
     - **Dependency Inversion (DIP):** Nguyên lý thiết kế hệ thống.
     - **Inversion of Control (IoC):** Mô hình kiến trúc đảo ngược quyền điều khiển (IoC Container).
     - **Dependency Injection (DI):** Kỹ thuật tiêm phụ thuộc qua hàm dựng `__construct`.
  - 10. Tại sao nói Dependency Inversion chính là chìa khóa vàng giúp dự án viết được Unit Test và dễ dàng thay thế công nghệ (ví dụ đổi từ MySQL sang MongoDB, hoặc đổi từ Mailgun sang SES) mà không làm sập hệ thống?

---

## PHẦN 5: KIẾN TRÚC HỆ THỐNG & GIAO TIẾP DỊCH VỤ HIỆN ĐẠI

### - [ ] 18. Cơ Chế Lưu Trữ & Xác Thực: Cookie vs Session
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Vì sao giao thức HTTP được gọi là **Stateless** (không lưu trạng thái)? Nếu không có Cookie và Session thì người dùng sẽ gặp phiền toái gì sau mỗi lần chuyển trang?
  2. Giải thích cơ chế "Chìa khóa & Ổ khóa":
     - Dữ liệu `session_id` được sinh ra ở đâu và lưu ở đâu?
     - Dữ liệu chi tiết của phiên làm việc (User ID, quyền, giỏ hàng) được lưu ở đâu trên máy chủ (RAM, Redis, Database hay File)?
     - Trình duyệt gửi `session_id` lên máy chủ thông qua HTTP Header nào trong mỗi request?
  3. **3 Cờ bảo mật Cookie sống còn:**
     - Tại sao cờ `HttpOnly` ngăn chặn được 100% việc hacker dùng mã độc JavaScript (lỗ hổng XSS) để cướp Cookie đăng nhập qua lệnh `document.cookie`?
     - Cờ `Secure` đảm bảo điều gì khi người dùng truy cập web qua mạng Wi-Fi công cộng?
     - Cờ `SameSite` với 2 giá trị `Lax` và `Strict` giúp hệ thống chống lại cuộc tấn công giả mạo yêu cầu chéo trang (CSRF - Cross-Site Request Forgery) như thế nào?
  4. Khi xây dựng ứng dụng di động (Mobile App) hoặc Single Page Application (React/Vue tách riêng Backend), người ta thường dùng **JWT (JSON Web Token)** hay Session truyền thống? Ưu và nhược điểm của từng loại?

---

### - [ ] 19. Xử Lý Bất Đồng Bộ Ở Hậu Trường: Queue & Job
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Phân biệt sự khác nhau giữa **Xử lý đồng bộ (Synchronous)** và **Xử lý bất đồng bộ (Asynchronous)** qua bài toán đặt hàng trực tuyến?
  2. Hàng đợi **Queue** đóng vai trò gì trong việc dàn phẳng lưu lượng (Traffic Spikes) khi có hàng chục nghìn người cùng bấm đặt hàng trong ngày Flash Sale?
  3. Cơ chế hoạt động của **Queue Worker**: Lệnh `php artisan queue:work` làm nhiệm vụ gì trong hệ thống? Tại sao trên server thật người ta phải dùng tiến trình **Supervisor** để giám sát worker này?
  4. Nếu một Job gửi email bị lỗi do máy chủ nhà mạng bị mất kết nối, cơ chế **Retry** và **Backoff** (thử lại sau 5s, 15s, 30s) được cấu hình như thế nào?
  5. Khái niệm **Failed Jobs / Dead Letter Queue**: Khi một Job đã thử lại quá số lần quy định mà vẫn thất bại, hệ thống lưu vết nó ở đâu và người kỹ sư vận hành sẽ xử lý nó ra sao?

---

### - [ ] 20. Giao Tiếp Real-time Bắn Sự Kiện: Webhook
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. So sánh sự khác nhau về băng thông và tài nguyên máy chủ giữa cơ chế **Polling** (liên tục gửi request hỏi) và cơ chế **Webhook** (Event-Driven)?
  2. Mô tả luồng xử lý Webhook hoàn chỉnh khi tích hợp Cổng thanh toán (VNPay / MoMo / Stripe):
     - Bước 1: Khách thanh toán thành công ở cổng.
     - Bước 2: Cổng thanh toán gọi request HTTP gì sang máy chủ của công ty em?
     - Bước 3: Phía server của em cần phản hồi HTTP Status code bao nhiêu để bên cổng biết là đã nhận tin thành công?
  3. **Bảo mật Webhook:** Làm sao server của em phân biệt được request Webhook đó là do chính cổng thanh toán gửi thật chứ không phải do hacker đang cố tình giả mạo bắn dữ liệu để lừa hệ thống cộng tiền? Khái niệm **Chữ ký bảo mật (HMAC SHA256 Signature)** và Secret Key hoạt động ra sao?
  4. Nếu server của em đang bảo trì lúc cổng thanh toán bắn Webhook sang, bên cổng thanh toán có cơ chế Retry như thế nào để đảm bảo đơn hàng không bị thất lạc?

---

### - [ ] 21. Kiểm Thử API Độc Lập Với Postman & Sandbox Postman Echo
* **Môi trường thực hành chuẩn:** Sử dụng Sandbox chính thức [https://postman-echo.com](https://postman-echo.com)
* **Hàng loạt câu hỏi & bài tập cọ xát thực tế:**
  1. Tại sao một kỹ sư Frontend giỏi luôn dùng Postman test API Backend trước khi bắt tay vào code giao diện?
  2. Hãy tạo một Environment trong Postman đặt biến `{{base_url}} = https://postman-echo.com`. Lợi ích của việc dùng biến môi trường này khi chuyển từ Local sang Staging là gì?
  3. Gọi thử request `GET {{base_url}}/get?user=intern&status=active`: Em đọc thấy các Query Parameters được server phản hồi lại ở trường nào trong JSON?
  4. Gửi một request `POST {{base_url}}/post` với Header `Content-Type: application/json` và body JSON raw `{"title": "Bug 101", "severity": "high"}`: Phân biệt Payload gửi lên và Response nhận về?
  5. Thử nghiệm cơ chế Cookie bằng API `GET {{base_url}}/cookies/set?session_token=xyz123` và `GET {{base_url}}/cookies`: Postman lưu trữ và tự động gửi kèm Cookie này ở các request sau như thế nào?
  6. Tính năng **Export cURL** trong Postman nằm ở đâu? Tại sao việc dán lệnh cURL vào ticket báo bug trên Jira lại giúp lập trình viên Backend tái hiện lỗi chỉ trong 5 giây mà không cần hỏi lại?

---

## PHẦN 6: GIAO DIỆN NGƯỜI DÙNG, HẠ TẦNG MÁY CHỦ & TƯ DUY PHỎNG VẤN

### - [ ] 22. Tư Duy Toàn Vẹn 4 Trạng Thái Màn Hình (Figma UI States)
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Tại sao một lập trình viên chỉ code đúng trường hợp có dữ liệu (Happy Path) sẽ bị coi là thiếu kinh nghiệm và thường xuyên bị QA/Tester trả lời (Reject) ticket?
  2. **Loading State:**
     - Skeleton Shimmer đem lại trải nghiệm tâm lý cho người dùng tốt hơn hiệu ứng con quay Spinner tròn ở điểm nào?
     - Tại sao việc **Disable nút Submit** (hoặc hiển thị trạng thái loading trên nút) là nguyên tắc bắt buộc để ngăn chặn người dùng bấm liên tiếp sinh ra đơn hàng trùng lặp?
  3. **Success State:**
     - Các quy chuẩn format hiển thị bắt buộc: Tiền tệ có phân cách hàng nghìn (`1.000.000 đ`), hiển thị ngày giờ theo múi giờ địa phương của người dùng, xử lý tiêu đề dài bằng `text-overflow: ellipsis`.
  4. **Empty State:**
     - Tại sao nói Empty State là "mỏ vàng trải nghiệm"? Nếu một khách hàng mới vào trang giỏ hàng chưa có sản phẩm nào, giao diện cần cung cấp những thành phần gì (hình vẽ + nút Kêu gọi hành động CTA) để giữ chân họ mua sắm?
  5. **Error State:**
     - Khi API trả về lỗi 500 hoặc rớt mạng, tại sao tuyệt đối cấm quăng chuỗi lỗi kỹ thuật tiếng Anh lên màn hình? Giao diện cần cung cấp thông tin gì và nút bấm nào để người dùng có cơ hội khắc phục?

---

### - [ ] 23. Kỹ Năng Vận Hành Máy Chủ Linux / Ubuntu Thực Tế
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. Tại sao hầu hết máy chủ ứng dụng thực tế đều dùng Linux không có giao diện đồ họa (No GUI)? Giao thức SSH hoạt động trên cổng port mặc định nào và cơ chế xác thực bằng cặp khóa **SSH Key (Public/Private Key)** an toàn hơn mật khẩu truyền thống ra sao?
  2. **Phân quyền file (File Permissions):**
     - Ý nghĩa của các con số trong lệnh `chmod 755` và `chmod 644` là gì (tương ứng với Read, Write, Execute cho Owner, Group, Others)?
     - Lỗi kinh điển *"Permission Denied: The stream or file storage/logs/laravel.log could not be opened in append mode"* thường được giải quyết triệt để bằng lệnh `chown` và `chmod` như thế nào?
  3. **Quản lý tiến trình & Dịch vụ:** Lệnh nào dùng để kiểm tra trạng thái và khởi động lại Nginx hoặc PHP-FPM khi web bị treo (`systemctl`)?
  4. **Soi Log thời gian thực:** Lệnh `tail -f /var/log/nginx/error.log` hoạt động ra sao? Làm thế nào để dùng kết hợp với lệnh `grep` để chỉ lọc ra các dòng log chứa chữ `Fatal Error`?
  5. **Tự động hóa Cronjob:** Cú pháp 5 dấu sao `* * * * *` trong file cấu hình `crontab -e` đại diện cho các đơn vị thời gian nào (phút, giờ, ngày, tháng, thứ)?

---

### - [ ] 24. Tư Duy Trưởng Thành & Chiến Lược Phỏng Vấn STAR
* **Hàng loạt câu hỏi mở rộng & cọ xát thực tế:**
  1. **Quy tắc 15–30 phút khi bị tắc (Stuck):** Tại sao việc ngồi tự mò mẫm 2 ngày mà không dám hỏi lại nguy hiểm ngang bằng việc cứ 5 phút lại quay sang hỏi Mentor một câu ngớ ngẩn? Khi đặt câu hỏi cho Senior, công thức 3 phần bắt buộc phải chuẩn bị trước là gì (*Lỗi gì - Đã tự thử cách gì - Đang nghi ngờ ở đâu*)?
  2. **Tiếp nhận Code Review:** Khi tạo một Pull Request và bị các anh Senior comment bắt sửa tới 10 chỗ, tâm thế của một kỹ sư chuyên nghiệp khác với tâm lý tự ái của một sinh viên mới ra trường như thế nào?
  3. **Mô hình phỏng vấn STAR:** Hãy tập dượt trả lời câu hỏi: *"Em hãy kể về một bài toán kỹ thuật khó hoặc một lỗi nghiêm trọng em từng gặp và cách em giải quyết nó?"* theo đúng 4 bước:
     - **S (Situation):** Bối cảnh dự án, triệu chứng lỗi (ví dụ trang danh mục 50 sản phẩm bị tải chậm 800ms).
     - **T (Task):** Mục tiêu cần đạt được (phải đưa thời gian phản hồi về dưới 100ms mà không tốn chi phí nâng cấp phần cứng server).
     - **A (Action):** Những hành động kỹ thuật chuyên sâu em đã làm (dùng Xdebug và Laravel Telescope soi ra lỗi N+1 Query phát sinh 51 câu truy vấn thừa; refactor lại mã nguồn sử dụng Eager Loading với `with()`).
     - **R (Result):** Kết quả đo lường được bằng số liệu cụ thể (giảm từ 51 câu xuống còn đúng 2 câu SQL, thời gian phản hồi rút ngắn 85% còn 70ms, CPU server giảm tải rõ rệt).
