<? // 글쓰기 페이지
  include_once $_SERVER['DOCUMENT_ROOT']."/0_ref/admin_tcha/admin/head.php";
?>
  <script type="text/javascript" src="/0_ref/admin_tcha/editor/js/HuskyEZCreator.js" charset="utf-8"></script>
  <article class="request">
    <h2>Register Project</h2>
    <form action="request_res.php" name="portfolio" method="post" enctype="multipart/form-data">
    <!-- enctype="multipart/form-data": 이미지 포함될 때 -->
    <!-- 포폴 필요 정보
      1. 썸네일
      2. 제목
      3. 상세 설명 (editor 추가)
      4. 프로젝트 url
      5. 등록 날짜
    -->
      <ul>
        <li><input type="text" name="title"></li>
        <li><input type="text" name="url"></li>
        <li><input type="date" name="reg_date"></li>
        <li><input type="file" name="upload"></li>
        <li>
          <textarea name="description" id="ir1" cols="30" rows="10"></textarea>
        </li>
        <li>공개<input type="checkbox" name="status" checked></li>
        <li><input type="submit" value="Register" class="btn"></li>
      </ul>    
    </form>
  </article>
<?
  callFunc('reqEditor()');
  include_once $_SERVER['DOCUMENT_ROOT']."/0_ref/admin_tcha/admin/foot.php";
?>