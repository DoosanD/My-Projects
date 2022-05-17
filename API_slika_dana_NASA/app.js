const url = "https://api.nasa.gov/planetary/apod?api_key=";
const api_key = config.NASA_API_KEY;

const fetchNASAData = async () => {
  try {
    const response = await fetch(`${url}${api_key}`);
    const data = await response.json();
    console.log("NASA APOD data", data);
    displayData(data);
  } catch (error) {
    console.log(error);
  }
};

const displayData = (data) => {
  if (data.media_type == "video") {
    document.getElementById("video").src = data.url;
  } else {
    console.log("no-video");
  }

  if (data.media_type == "image") {
    document.getElementById("picture").src = data.hdurl;
  } else {
    document.getElementById("picture").src =
      "https://png.pngitem.com/pimgs/s/42-424779_nasa-logo-wallpaper-hd-nasa-black-and-white.png";
    console.log("no-picture");
  }

  document.getElementById("title").textContent = data.title;
  document.getElementById("date").textContent = data.date;
  document.getElementById("explanation").textContent = data.explanation;
};

fetchNASAData();
