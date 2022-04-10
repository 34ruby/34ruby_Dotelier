
<x-app-layout>
    {{-- <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="form-control">
        <div class="input-group">
            <input type="number" min="10" max="20" placeholder="canvas size" id="canvasSize" class="input input-bordered" name="input">
            <input type="button" onclick="makeCanvas();" value="getValue">
        </div>
    </div>
        <div class="dot_template flex-auto items-center ">
            <div class="flex bg-slate-200">
                <div class="flex-auto w-2/5 content-center m-24 bg-black">
                    <div class="flex justify-center items-center flex-col space-y-4">
                        <input type='text' id="preferredHex"  />
                        <div>
                            <div>
                                {{-- <div class="grid w-32 h-32 bg-base-300 place-items-center m-4">미리보기</div>
                                <button id="fff">dd</button>
                                <label for="preview-modal" class="btn modal-button" onclick="borderDelete();" >미리보기</label>
                                <label id="btnSave" class="btn modal-button">로컬에 저장하기</label> --}}
                                <label for="upload-modal" class="btn modal-button" onclick="borderDelete();">미리보기</label>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-auto w-3/5 bg-slate-100 content-center">
                    <div id="board" class="flex self-center justify-center" >
                    </div>
                </div>
            </div>
        </div>
    <script>
        $(function(){
            $("#preferredHex").spectrum({
                preferredFormat: "hex",
                flat: true,
                showInput: true,
                showPalette: true,
                palette: [["red", "rgb(0, 255, 0)", "rgb(0, 0, 255)"]]
            });
            // let colorSet = '#000000'
            $(document.body).delegate('.pixleColorSet', 'click', function() {
                colorSet = $('#preferredHex').val();
                console.log(colorSet)
            $( this ).css( "background-color", colorSet );
            });
            let isMouseDown = false;
        });
        let colorSet = '';
        let boardSize = 0;
        let createdCanvas = false;
        function getInputValue() {
            colorSet = $('#preferredHex').val();
        }
        function makeCanvas() { //on load
            if(createdCanvas == true) {
                alert('이미 생성됨')
            } else {
                boardSize = $('#canvasSize').val();
                if(boardSize < 10 || boardSize > 40) {
                    alert('사이즈 조절! 10 이상 40 이하로')
                } else {
                    alert(boardSize +'*' +boardSize + ' 사이즈로 캔버스 생성!')
                    printBoard(boardSize);
                    createdCanvas = true;
                }
            }
        }
        // var canvas = ''
        // var context=''
        function borderDelete() {
            createDiv()
            $("td").addClass( "border-transparent" );
            $("td").removeClass( "border" );
            html2canvas(document.querySelector("#ff")).then(canvas => {
            document.getElementById('preview-canvass').appendChild(canvas)
            canvas.getContext('2d');
            // $("canvas").addClass( "preview-canvas" );
            $("canvas").attr('id', 'preview-canvas');
            });
        }
        let divs = ''
        function createDiv() {
            divs = document.createElement('div');
            divs.classList.add('w-1/5');
            document.getElementById('preview-modal2').appendChild(divs)
            divs.id = 'preview-canvass';
        }
        function deleteDiv() {
        divs = document.getElementById('preview-canvass');
        divs.remove();
        }
        let myTable = ''
        let myRow = ''
        function printBoard(i_BoardSize) {
            let maxRow = parseInt(i_BoardSize);
            let maxCol = parseInt(i_BoardSize);
            let num = 1;
            myTable = $("<table id=\"ff\" cellpadding=\"0\" cellspacing=\"0\" oncontextmenu=\"return false\" height=\"600px\" width=\"600px\"></table>").appendTo("#board");
            for (let row = maxRow - 1; row >= 0; row--) {
                 myRow = $("<tr></tr>").appendTo(myTable);
                for (let col = 0; col < maxCol; col++) {
                    // myRow.append("<td class=\"pixleColorSet\">" + num + "</td>");
                    myRow.append("<td class=\"pixleColorSet border\" onClick=\"getInputValue\"></td>");
                    num++;
                }
            }
        }
    </script>
</x-app-layout>
