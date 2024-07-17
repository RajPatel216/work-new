 function checkscore(){
//  let ele1 = document.getElementsByName('ans');
//  let ele2 = document.getElementsByName('ans2');
//  let ele3 = document.getElementsByName('ans3');
    let all_ele = document.querySelectorAll('.ans');
    let count = 0;

    for(i=0;i<all_ele.length;i++){
        if(all_ele[i].checked){
            if(all_ele[i].value == 'Nile' || all_ele[i].value == 'Mt. Everest' || all_ele[i].value == '1AU'){
             count++;
            }
        }
        document.querySelector('.massage').innerHTML = "Your Score is : " + count + '/3';
    }
}


let all_ele = document.querySelectorAll('.ans');
all_ele.forEach(ele=>{
 ele.addEventListener('click',()=>{
   for(i=0;i<all_ele.length;i++)
  {
    if(all_ele[i].checked)
    {
        if(all_ele[i].value == 'Nile' || all_ele[i].value == 'Mt. Everest' || all_ele[i].value == '1AU')
        {
           let a= document.querySelector('.massage')
            a.innerHTML = "Your Answer is : " + 'TRUE';
            a.style.color="green";
        }
        else
        {
           let b = document.querySelector('.massage');
           b.innerHTML = "Your Answer is : " + 'FALSE';
           b.style.color="red";
        }
    }
   }
 })
})

// let form = document.querySelector('form')

function reset(){
    // let radio = document.querySelectorAll('.ans');
    // radio.checked= false;
    location.reload();
    // form.reset();
}
































// let answer = document.querySelectorAll('.ans');
// let ans_one = document.querySelectorAll('.one');
// let ans_two = document.querySelectorAll('.two');
// let ans_three = document.querySelectorAll('.three');
// let truee = document.querySelectorAll('.true');
// let falsee = document.querySelectorAll('.false');

// let count=0;
// let count_falsee=0;

// function truee(){
//     count++;
//     // answer.disabled = true;
//      console.log(count);
//      ansdisabled();
//      ans2disabled();
//      ans3disabled();
//     }

// function falsee(){
//     count_falsee++;
//     console.log(count_falsee);
//     ansdisabled();
//     ans2disabled();
//     ans3disabled();
//     }
    
// let ansdisabled = () => {
//         for (let ans1 of ans_one) {
//             ans1.disabled = true;
//         };    
//     };
    
// let ans2disabled = () => {
//     for (let ans2 of ans_two) {
//         ans2.disabled = true;
//     };
// };

// let ans3disabled = () => {
// for (let ans3 of ans_three) {
//     ans3.disabled = true;
// }
// };


















    // answer.forEach(ans =>{
        //     ans.addEventListener('click',()=>{
            //      if(ans=='truee'){
                //         count++;
                //     }
                // })
                // } )
                // console.log(count);