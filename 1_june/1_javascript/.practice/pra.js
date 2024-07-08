//~~~~~~~~~~~prompt method
// let n = prompt("enter a num:")
// let arr = []
// for (let i = 1; i <= n;i++) {
//         arr[i-1] = i;
// }
// console.log("final array is:", arr)

// let out1 = arr.reduce((prev, cur) => {
//         return prev + cur
// })
// console.log("reduce array is:", out1)



//~~~~~~~~~~~~filter method
// let marks=[90,91,92,80,99,88]
// let output = marks.filter((val) => {
//         return val>90
// })
// console.log(output)



 //~~~~~~~~~reduce method for finding biggest number
// let a = [2, 4, 6, 100, 80, 12, 35]
// let output = a.reduce((prev,cur) =>{
//         return prev>cur? prev :cur
        
//         // if (prev > cur) {
//         //        return prev
//         // }
//         // else {
//         //         return cur
//         // }
// })
// console.log(output)



//~~~~~~~~~~~~~ map function,  map function is like "loop" it works for all elements
// let nums = [1, 4, 5]
// let newrr = nums.map((val) => {
//         return val * 2;
// })
// console.log(newrr);



// ~~~~~~~~~~~ use of forEach function       or callback_function
// let arr = [1, 3, 40, 20, 10]

// arr.forEach((str)=>{
//     let ar = str * str
    
//     console.log("square of",str,"is ::::",ar)
// })
      
// console.log(arr)



// ~~~~~~~~~~ vowel counter programs
// function vow(c){
//     let count = 0;
//     for (let i of c) {
//         if (i == 'a' || i == 'e' || i == 'i' || i == 'o' || i == 'u'){
//             count++;
//         }
//     }
//     return count
// }
// console.log("answer is:"+vow('jaiiiihind'))


//~~~~~~~~~~ 2nd vowel counter 
// function vow(a) {
//         count = 0;
//     for (let j = 0;j <a.length;j++) {
//             if (a[j] == 'a' ||a[j]== 'i' || a[j]=='o' ||a[j]== 'u' || a[j]=='e'){
//                 count++;
//             }
//         }
//         return count
//     }
// console.log(vow('hello india im here'))
