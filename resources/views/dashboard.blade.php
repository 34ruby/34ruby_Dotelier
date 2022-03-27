
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
        <div class="dot_template flex-auto items-center">
            <div class="flex w-4/6 ">
                <div class="flex-auto w-2/5 content-center m-24">
                    <div class="flex justify-center items-center flex-col space-y-4">
                        <input type='text' id="preferredHex" " />
                        <div>
                            <div>
                                <div class="grid w-32 h-32 bg-base-300 place-items-center m-4">미리보기</div>
                                {{-- <div class="btn-group">
                                    <button class="btn">크게보기</button>
                                    <button class="btn">로컬 저장</button>
                                    <button class="btn">커뮤니티 업로드</button>
                                </div> --}}
                                <label for="preview-modal" class="btn modal-button">미리보기</label>
                                <label for="save-modal" class="btn modal-button">로컬에 저장하기</label>
                                <label for="upload-modal" class="btn modal-button">커뮤니티에 업로드하기</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-3/5">
                    <div id="board" class="flex-auto flex  justify-center items-center" >
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

        function printBoard(i_BoardSize) {
            let maxRow = parseInt(i_BoardSize);
            let maxCol = parseInt(i_BoardSize);
            let num = 1;

            let myTable = $("<table cellpadding=\"0\" cellspacing=\"0\" oncontextmenu=\"return false\" height=\"600px\" width=\"600px\"></table>").appendTo("#board");
            for (let row = maxRow - 1; row >= 0; row--) {
                let myRow = $("<tr></tr>").appendTo(myTable);
                for (let col = 0; col < maxCol; col++) {
                    // myRow.append("<td class=\"pixleColorSet\">" + num + "</td>");
                    myRow.append("<td class=\"pixleColorSet border\" onClick=\"getInputValue\"></td>");
                    num++;
                }
            }
        }
    </script>
</x-app-layout>
