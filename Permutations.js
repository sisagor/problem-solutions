

function getAllPermutations(string) {
var results = [];


if (string.length === 1) {
results.push(string);
return results;
}

for (var i = 0; i < string.length; i++) {
var firstChar = string[i];
var charsLeft = string.substring(0, i) + string.substring(i + 1);
var innerPermutations = getAllPermutations(charsLeft);

for (var j = 0; j < innerPermutations.length; j++) {
results.push(firstChar + innerPermutations[j]);

}
}

var newResult = remove_duplicates(results);
return newResult;

}
console.log(getAllPermutations('4448'));


function remove_duplicates(arr) {
var obj = {};
var ret_arr = [];
for (var i = 0; i < arr.length; i++) {
obj[arr[i]] = true;
}
for (var key in obj) {
ret_arr.push(key);
}
return ret_arr;
}