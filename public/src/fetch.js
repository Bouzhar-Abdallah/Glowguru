

/* async function getdata() {
  const respons = await fetch(
    "http://localhost:8888/glowguru/test/post",
    {
        method: "POST",
        headers: {
        "Content-Type": "application/json",
    },
        body: JSON.stringify({
        key1: "value1",
        key2: "value2",
  }
);
  const data = await respons.json();
  return data;
}

getdata().then((result) => {
  console.log(result);
}); */

function test() {
const xml = new XMLHttpRequest

xml.open("POST", 'http://localhost:8888/glowguru/test/post', true)
xml.setRequestHeader('Content-Type', 'application/json');
xml.onload = function(){
    if (this.status === 200) {
        
        const data =JSON.parse(this.response)
        
        console.log(data);
    }
}
xml.send(JSON.stringify({
    key1: "value1",
    key2: "value2",
}))
    
}

test()

/* fetch("https://example.com/api/data", 
    {
        method: "POST",
        headers: {
        "Content-Type": "application/json",
                },
        body: JSON.stringify({
        key1: "value1",
        key2: "value2",
  }),
    }); */
