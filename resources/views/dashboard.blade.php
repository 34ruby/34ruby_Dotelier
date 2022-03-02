<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <div>
                <div>
                        <button class="btn_show btn btn-primary">Button</button>
                        <button class="btn_hide btn btn-primary">Button</button>
                        <div class="btn_word">Hello world!!!</div>
                        <div class="form-control">
                            <div class="input-group">
                              <input type="number" min="10" max="20" placeholder="canvas size" id="canvasSize" class="input input-bordered" name="input">
                              <input type="button" onclick="makeCanvas();" value="getValue">
                            </div>
                        </div>
                        <div class="dot_template">
                            <p> <center><h3><font size="20" color="black">Canvas </font></h3></center></p>
                            <div>
                                <div id="board">
                                    {{-- <div class="cell">
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('.btn_show').click(function(){
                $('.btn_word').show();
            });
            $('.btn_hide').click(function(){
                $('.btn_word').hide();
            });
            $(document.body).delegate('.pixleColorSet', 'click', function() {
            console.log(num);
            $('.btn_word').show();
            });
            let isMouseDown = false;
            $(".pixleColorSet").mousedown(function() {
                console.log('asdf')
                isMouseDown = true;
                $(this).toggleclass("highlighted");
                isHighlighted = $(this).hasClass("highlighted");
                return false;
            })
            .mouseover(function () {
                if (isMouseDown) {
                $(this).toggleClass("highlighted", isHighlighted);
                }
            })
            .bind("selectstart", function () {
            return false;
            })
            $(document)
            .mouseup(function () {
            isMouseDown = false;
            });
        });
        let boardSize = 0;
        let createdCanvas = false;

        function makeCanvas() { //on load
            if(createdCanvas == true) {
                alert('이미 생성됨')
            } else {
                boardSize = $('#canvasSize').val();
                if(boardSize < 10 || boardSize > 20) {
                    alert('사이즈 조절! 10 이상 20 이하로')
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

            let myTable = $("<table id=\"our_table\" cellpadding=\"0\" cellspacing=\"0\" oncontextmenu=\"return false\"></table>").appendTo("#board");
            for (let row = maxRow - 1; row >= 0; row--) {
                let myRow = $("<tr></tr>").appendTo(myTable);
                for (let col = 0; col < maxCol; col++) {
                    myRow.append("<td class=\"pixleColorSet\">" + num + "</td>");
                    num++;
                }
            }
        }
    </script>
</x-app-layout>
