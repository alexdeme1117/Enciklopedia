const names = {"name1":"A", "name2":"B", "name3":"C", "name4":"D"};
const hunames = {"name1":"D", "name2":"C", "name3":"B", "name4":"A"};
const nums = {"name1":3, "name2":4, "name3":1, "name4":2};
const ages = {"name1":14, "name2":23, "name3":32, "name4":41};

for(let i = 1; i < Object.keys(names).length + 1; i++) {
    let row = document.createElement("td");
    let text = document.createTextNode(names["name" + i.toString()]);
    row.appendChild(text);
    document.getElementsByTagName("tr")[i].appendChild(row);
}
for(let i = 1; i < Object.keys(names).length + 1; i++) {
    let row = document.createElement("td");
    let text2 = document.createTextNode(hunames["name" + i.toString()]);
    row.appendChild(text2);
    document.getElementsByTagName("tr")[i].appendChild(row);
}
for(let i = 1; i < Object.keys(names).length + 1; i++) {
    let row = document.createElement("td");
    let text3 = document.createTextNode(nums["name" + i.toString()]);
    row.appendChild(text3);
    document.getElementsByTagName("tr")[i].appendChild(row);
}
for(let i = 1; i < Object.keys(names).length + 1; i++) {
    let row = document.createElement("td");
    let text4 = document.createTextNode(ages["name" + i.toString()]);
    row.appendChild(text4);
    document.getElementsByTagName("tr")[i].appendChild(row);
}
