<input type="checkbox" id="upload-modal" class="modal-toggle">
<div class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg">미리보기</h3>
    <p class="py-4">실제 업로드 작업물은 다음과 같이 생성 될 예정입니다. 작업물은 로컬에 다운로드 하거나 커뮤니티에 올릴 수 있습니다.</p>
    <div id="preview-canvass">
    </div>
    <div class="modal-action">
      <label for="upload-modal" class="btn" onclick="borderCreate();">돌아가기</label>
    </div>
  </div>
</div>
<script>

function borderCreate() {
    $("td").addClass( "border" );
    $("td").removeClass( "border-transparent" );
    clearCanvas()
}


</script>
