const app = document.getElementById('root')

const container = document.createElement('div')
container.setAttribute('class', 'container')

app.appendChild(container)

var request = new XMLHttpRequest()

request.open('GET', 'https://tmrlpn479g.execute-api.ap-southeast-2.amazonaws.com/api/works', true)
request.onload = function () {
  // Begin accessing JSON data here
  var data = JSON.parse(this.response)

  if (request.status >= 200 && request.status < 400) {
    data.forEach(composition => {

    const card = document.createElement('div')
    card.setAttribute('class', 'card')

  const h1 = document.createElement('h1')
  h1.textContent = composition.work_name

  const p1 = document.createElement('p')
  composition.composer_given_name = composition.composer_given_name.substring(0, 300)
  p1.textContent = `${composition.composer_given_name} ${composition.composer_surname} ` 

    const s = document.createElement('br')

    const a = document.createElement('a') 
    a.href = `/Profile_detail.php?id=${composition.composer_id}`
    a.textContent = `Go to Profile`


    container.appendChild(card)
      card.appendChild(h1)
      card.appendChild(p1)
      card.appendChild(s)
      card.appendChild(a)



    })
} else {
    const errorMessage = document.createElement('marquee');
    errorMessage.textContent = `It's not working!`;
    app.appendChild(errorMessage);
  }
}

request.send()

function myFunction(query) {
    const url = 'https://tmrlpn479g.execute-api.ap-southeast-2.amazonaws.com/api/works'
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    root = document.getElementById("root");
    h1 = h1.getElementsByTagName("h1");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }       
    }
}