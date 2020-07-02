function calc(){
    let start_sum = document.getElementById("start_sum").value;
    let step = document.getElementById('step').value;
    let amount = document.getElementById('amount').value;
    let dist = document.getElementById('dist').value;
    let first = document.getElementById('first_sec').value;
    let second = document.getElementById('second_sec').value;
    let third = document.getElementById('third_sec').value;
    let fourth = document.getElementById('fourth_sec').value;
    let fifth = document.getElementById('fifth_sec').value;
    let ws_first = document.getElementById('first_th1').value;
    let ws_second = document.getElementById('second_th1').value;
    let ws_third = document.getElementById('third_th1').value;
    let osp = document.getElementById('osp').value;
    let f_inp1 = document.getElementById('four_input1').value;
    let f_inp2 = document.getElementById('four_input2').value;
    let f_inp3 = document.getElementById('four_input3').value;
    let f_inp4 = document.getElementById('four_input4').value;
    let f_inp5 = document.getElementById('four_input5').value;
    let f_inp6 = document.getElementById('four_input6').value;
    let f_inp7 = document.getElementById('four_input7').value;
    let f_inp8 = document.getElementById('four_input8').value;
    let f_inp9 = document.getElementById('four_input9').value;
    let f_inp10 = document.getElementById('four_input10').value;
    let arr = new Map([['f_inp6', f_inp6],['f_inp7', f_inp7],['f_inp8', f_inp8],['f_inp9', f_inp9],['f_inp10', f_inp10],['f_inp1', f_inp1],['f_inp2', f_inp2],['f_inp3', f_inp3],['f_inp4', f_inp4],['f_inp5', f_inp5],['osp', osp],['ws_first', ws_first],['ws_second', ws_second],['ws_third', ws_third],['start_sum', start_sum],['step', step],['amount', amount], ['dist', dist],['first_sec', first],['second_sec', second],['third_sec', third],['fourth_sec', fourth],['fifth_sec', fifth]]);

    arr.forEach(function (value, key) {
        let val = value.replace(/ /g, '');
        val = val.replace(/,/g, '.');
        arr.set(key, Number(val));
        if (val === '' || isNaN(val)){
            arr.set(key, 0);
        }
    });
    return arr;
}

function general() {
    let arr = calc();
    document.getElementById('scwn').value = (parseFloat((arr.get('start_sum')/1.2/arr.get('amount') - arr.get('dist')))).toFixed(3)
}
function cost_in_sum() {
    let arr = calc();
        document.getElementById('first_sec_result').value = (parseFloat(((arr.get('first_sec') + arr.get('dist'))* arr.get('amount') * 1.2))).toFixed(3);
        document.getElementById('second_sec_result').value = (parseFloat(((arr.get('second_sec') + arr.get('dist'))* arr.get('amount') * 1.2))).toFixed(3);
        document.getElementById('third_sec_result').value = (parseFloat(((arr.get('third_sec') + arr.get('dist'))* arr.get('amount') * 1.2))).toFixed(3);
        document.getElementById('fourth_sec_result').value = (parseFloat(((arr.get('fourth_sec') + arr.get('dist'))* arr.get('amount') * 1.2))).toFixed(3);
        document.getElementById('fifth_sec_result').value = (parseFloat(((arr.get('fifth_sec') + arr.get('dist'))* arr.get('amount') * 1.2))).toFixed(3);
}
function with_steps() {
    let arr = calc();
    let box1;
    let box2;
    let box3;
    let cube1;
    let cube2;
    let cube3;
    document.getElementById('first_th1').value = box1 = ((parseFloat(arr.get('start_sum') - arr.get('step')))).toFixed(3);
    document.getElementById('second_th1').value = box2 = ((parseFloat(arr.get('start_sum') - arr.get('step')*2))).toFixed(3);
    document.getElementById('third_th1').value = box3 = ((parseFloat(arr.get('start_sum') - arr.get('step')*3))).toFixed(3);
    document.getElementById('first_th2').value = cube1 = ((box1/1.2/arr.get('amount')) - arr.get('dist')).toFixed(3);
    document.getElementById('first_th3').value = (cube1 - arr.get('osp')).toFixed(3);
    document.getElementById('second_th2').value = cube2 = ((box2/1.2/arr.get('amount')) - arr.get('dist')).toFixed(3);
    document.getElementById('second_th3').value = (cube2 - arr.get('osp')).toFixed(3);
    document.getElementById('third_th2').value = cube3 = ((box3/1.2/arr.get('amount')) - arr.get('dist')).toFixed(3);
    document.getElementById('third_th3').value = (cube3 - arr.get('osp')).toFixed(3);
}
function enemy_cost() {
    let arr = calc();
    let box1;
    let box2;
    let box3;
    let box4;
    let box5;
    let box6;
    let box7;
    let box8;
    let box9;
    let box10;
    document.getElementById('cwno1').value = box1 = (parseFloat((arr.get('f_inp1')/1.2/arr.get('amount')) - arr.get('dist'))).toFixed(3);
    document.getElementById('cwnwo1').value = parseFloat(box1 - arr.get('osp')).toFixed(3);
    document.getElementById('with_dist1').value = parseFloat(box1 + arr.get('dist')).toFixed(3);
    document.getElementById('cwno2').value = box2 = (parseFloat((arr.get('f_inp2')/1.2/arr.get('amount')) - arr.get('dist'))).toFixed(3);
    document.getElementById('cwnwo2').value = parseFloat(box2 - arr.get('osp')).toFixed(3);
    document.getElementById('with_dist2').value = parseFloat(box2 + arr.get('dist')).toFixed(3);
    document.getElementById('cwno3').value = box3 = (parseFloat((arr.get('f_inp3')/1.2/arr.get('amount')) - arr.get('dist'))).toFixed(3);
    document.getElementById('cwnwo3').value = parseFloat(box3 - arr.get('osp')).toFixed(3);
    document.getElementById('with_dist3').value = parseFloat(box3 + arr.get('dist')).toFixed(3);
    document.getElementById('cwno4').value = box4 = (parseFloat((arr.get('f_inp4')/1.2/arr.get('amount')) - arr.get('dist'))).toFixed(3);
    document.getElementById('cwnwo4').value = parseFloat(box4 - arr.get('osp')).toFixed(3);
    document.getElementById('with_dist4').value = parseFloat(box4 + arr.get('dist')).toFixed(3);
    document.getElementById('cwno5').value = box5 = (parseFloat((arr.get('f_inp5')/1.2/arr.get('amount')) - arr.get('dist'))).toFixed(3);
    document.getElementById('cwnwo5').value = parseFloat(box5 - arr.get('osp')).toFixed(3);
    document.getElementById('with_dist5').value = parseFloat(box5 + arr.get('dist')).toFixed(3);
    document.getElementById('cwno6').value = box6 = (parseFloat((arr.get('f_inp6')/1.2/arr.get('amount')) - arr.get('dist'))).toFixed(3);
    document.getElementById('cwnwo6').value = parseFloat(box6 - arr.get('osp')).toFixed(3);
    document.getElementById('with_dist6').value = parseFloat(box6 + arr.get('dist')).toFixed(3);
    document.getElementById('cwno7').value = box7 = (parseFloat((arr.get('f_inp7')/1.2/arr.get('amount')) - arr.get('dist'))).toFixed(3);
    document.getElementById('cwnwo7').value = parseFloat(box7 - arr.get('osp')).toFixed(3);
    document.getElementById('cwnwo7').value = parseFloat(box7 - arr.get('osp')).toFixed(3);
    document.getElementById('with_dist7').value = parseFloat(box7 + arr.get('dist')).toFixed(3);
    document.getElementById('cwno8').value = box8 = (parseFloat((arr.get('f_inp8')/1.2/arr.get('amount')) - arr.get('dist'))).toFixed(3);
    document.getElementById('cwnwo8').value = parseFloat(box8 - arr.get('osp')).toFixed(3);
    document.getElementById('with_dist8').value = parseFloat(box8 + arr.get('dist')).toFixed(3);
    document.getElementById('cwno9').value = box9 = (parseFloat((arr.get('f_inp9')/1.2/arr.get('amount')) - arr.get('dist'))).toFixed(3);
    document.getElementById('cwnwo9').value = parseFloat(box9 - arr.get('osp')).toFixed(3);
    document.getElementById('with_dist9').value = parseFloat(box9 + arr.get('dist')).toFixed(3);
    document.getElementById('cwno10').value = box10 = (parseFloat((arr.get('f_inp10')/1.2/arr.get('amount')) - arr.get('dist'))).toFixed(3);
    document.getElementById('cwnwo10').value = parseFloat(box10 - arr.get('osp')).toFixed(3);
    document.getElementById('with_dist10').value = parseFloat(box10 + arr.get('dist')).toFixed(3);
}