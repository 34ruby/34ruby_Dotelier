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
                                    {{-- <img src="{{URL::asset('/images/title.jpg')}}" width="100%"/> --}}
                                    <input type='text' id="preferredHex" />
                                </div>
                            </div>
                        </div>
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
                palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]]
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

            let myTable = $("<table id=\"our_table\" cellpadding=\"0\" cellspacing=\"0\" oncontextmenu=\"return false\" height=\"600px\" width=\"600px\"></table>").appendTo("#board");
            for (let row = maxRow - 1; row >= 0; row--) {
                let myRow = $("<tr></tr>").appendTo(myTable);
                for (let col = 0; col < maxCol; col++) {
                    // myRow.append("<td class=\"pixleColorSet\">" + num + "</td>");
                    myRow.append("<td class=\"pixleColorSet\" onClick=\"getInputValue\"></td>");
                    num++;
                }
            }
        }
    </script>
</x-app-layout>
