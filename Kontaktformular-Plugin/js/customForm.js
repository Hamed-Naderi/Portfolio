

var subjectObject = {
  "Europa": {
    "Spanien": ["Madrid", "Barcelona", "Valencia", "Sevilla"],
    "Italien": ["Rom", "Mailand", "Florenz", "Sorrent"],
    "Frankreich": ["Paris", "Lyon", "Marseille", "Toulouse"],
    "Gerichenland": ["Athen", "Chania ", "Thessaloniki "]      
  },
  "Afrika": {
    "Ägypten": ["Kairo", "Alexandria", "Gizeh"],
    "Keina": ["Nairobi", "Mombasa", "Nakuru"],
    "Tunesien": ["Tunis", "Bizerte", "Sousse"]
  },
  "Asien": {
    "Japan": ["Tokio", "Kyoto", "Osaka", "Yokohama"],
    "Indien": ["Mumbai", "Delhi", "Kolkata", "Pune"]
  }
}

window.onload = function() {
  var continentSel = document.getElementById("continent");
  var countrySel = document.getElementById("country");
  var citySel = document.getElementById("city");
  if(continentSel) {
    for (var x in subjectObject) {
      continentSel.options[continentSel.length] = new Option(x);
    }
    continentSel.onchange = function() {
      citySel.length = 1;
      countrySel.length = 1;
      for (var y in subjectObject[this.value]) {
        countrySel.options[countrySel.length] = new Option(y);
      }
    }
    countrySel.onchange = function() {
      citySel.length = 1;
      var z = subjectObject[continentSel.value][this.value];
      for (var i = 0; i < z.length; i++) {
        citySel.options[citySel.length] = new Option(z[i]);
      }
    }
  }
}
