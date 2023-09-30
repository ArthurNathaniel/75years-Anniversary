// JavaScript for audio functionality
const audioPlayer = document.getElementById("audio-player");
const audioSource = document.getElementById("audio-source");
const audioList = document.querySelector(".audio-list");
const searchInput = document.getElementById("search-input");

let currentlyPlaying = null;

// Define an array of audio file URLs with titles and dates
const audioFiles = [
  {
    title: "TItle: Audio Mass (St. John Chrysostom) ",
    src: "https://res.cloudinary.com/drcy8aq34/video/upload/v1695221251/audio-mass_tb92co.mp3",
    date: "Date: 13th September, 2023 \n <br> Name: Rev. Fr. Gabriel Kofi Sekyere",
  },
  {
    title: "TItle: ",
    src: "https://res.cloudinary.com/drcy8aq34/video/upload/v1695221251/audio-mass_tb92co.mp3",
    date: "Date: \n <br> Name:",
  },
];

function createAudioItem(title, src, date) {
  const audioItem = document.createElement("div");
  audioItem.classList.add("audio-box");
  audioItem.innerHTML = `
                <div class="audio-icon">
                    <h1><i class="fa-solid fa-play"></i></h1>
                </div>
                <div class="audio-info">
                    <h3>${title}</h3>
                    <p id="audio-date">${date}</p>
                </div>
                <div class="audio-download">
                    <h1><i class="fa-regular fa-circle-down"></i></h1>
                </div>
            `;

  audioItem.addEventListener("click", () => {
    if (currentlyPlaying === src) {
      // If the same audio is already playing, pause it
      audioPlayer.pause();
      audioItem.querySelector(".audio-icon h1").innerHTML =
        '<i class="fa-solid fa-play"></i>';
      currentlyPlaying = null;
    } else {
      audioSource.src = src;
      audioPlayer.load();
      audioPlayer.play();
      audioItem.querySelector(".audio-icon h1").innerHTML =
        '<i class="fa-solid fa-pause"></i>';
      currentlyPlaying = src;
    }
  });

  // Download audio when clicking on the download icon
  const downloadLink = document.createElement("a");
  downloadLink.style.display = "none";
  downloadLink.href = src;
  downloadLink.download = title + ".mp3";
  document.body.appendChild(downloadLink);

  audioItem.querySelector(".audio-download").addEventListener("click", (e) => {
    e.stopPropagation(); // Prevent audio play when clicking the download icon
    downloadLink.click();
  });

  audioList.appendChild(audioItem);
}

// Populate the audio list initially
audioFiles.forEach((audio) => {
  createAudioItem(audio.title, audio.src, audio.date);
});

// Function to filter audio items based on search input
function filterAudioItems(searchText) {
  const filteredAudioFiles = audioFiles.filter((audio) => {
    return audio.title.toLowerCase().includes(searchText.toLowerCase());
  });

  // Clear the current audio list
  audioList.innerHTML = "";

  // Populate the audio list with filtered items
  filteredAudioFiles.forEach((audio) => {
    createAudioItem(audio.title, audio.src, audio.date);
  });
}

// Add an event listener to the search input field
searchInput.addEventListener("input", () => {
  filterAudioItems(searchInput.value);
});
