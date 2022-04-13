<input type="checkbox" id="my-modal-5" class="modal-toggle">
<div class="modal">
  <div class="modal-box">

    <h3 class="font-bold text-lg">미리보기</h3>
    <p class="py-4">실제 업로드 작업물은 다음과 같이 생성 될 예정입니다. 작업물은 로컬에 다운로드 하거나 커뮤니티에 올릴 수 있습니다.</p>
    <div id="preview-modal2">
        {{-- <div id="preview-canvass">
        </div> --}}
    </div>
    <div>
        <input type="text" placeholder="저장할 파일 이름 입력" class="input input-bordered input-sm w-full max-w-xs">
        <div class="modal-action">
            <button class="btn" onclick="uploadGallery();">갤러리 페이지 업로드</button>
            <button class="btn" onclick="donwloadImage();">로컬에 다운로드</button>
            <label for="my-modal-5" class="btn" onclick="borderCreate();">돌아가기</label>
        </div>
    </div>
  </div>
</div>
<script>


function borderCreate() {
    $("td").addClass( "border" );
    $("td").removeClass( "border-transparent" );
    deleteDiv()
}

function uploadGallery() {
    console.log('라라벨 갤러리에 업로드 완료!')
}

function localSave() {
    console.log('로컬에 다운로드 완료!')
}

function donwloadImage() {
    printDiv($('#preview-canvas'))
}

let downloadFileName = 'default';

function printDiv(div) {
    div = div[0]

    html2canvas(div).then(function(canvas) {
        var myImage = canvas.toDataURL();
        downloadURI(myImage, downloadFileName+".png")
    })
}

function downloadURI(uri, name) {
    var link = document.createElement('a')
    link.download = name;
    link.href = uri;
    document.body.appendChild(link);
    link.click();
}

// $('#blobButton').click(function() {
//     printDiv($('#preview-canvass'))
// })

</script>
