// let videoContainer = document.querySelector(".video-container");
// let controls = document.querySelector(".controls");
// let info = document.querySelector(".info");
// let myVideo = document.querySelector(".my-video");
// let heVideo = document.querySelector(".he-video");
// let containerFluid = document.querySelector(".container-fluid");
// let zoomInOrOut = document.querySelector(".zoom-in-or-out");
// let list = document.querySelector(".list");
// const toggleVideoBtn = document.getElementById('toggle-video');
// const toggleMicBtn = document.getElementById('toggle-mic');
// const localVideo = document.getElementById('local-video');
// const more = document.getElementById('more');
// let streamMode = 'video';
// // let streamMode = 'audio';
// // let streamMode = document.querySelector(".container-fluid").getAttribute("data-state-call");
// // let nameMe = document.querySelector(".container-fluid").getAttribute("data-name-me");
// // let nameHe = document.querySelector(".container-fluid").getAttribute("data-name-he");
// let nameMe = "kareem";
// let nameHe = "abdo";
// let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
// let constraints;
// let idleTimer;
// let lastRemoteStream = null;
// let currentCall = null;
// let localStream = null;
// let audioState = true;
// let isLongPress = false;
// let stateBtnMove;

// function initAudio() {
//   // audio = new Audio(`${window.APP_BASE_URL}/assets/sound.mp3`);
//   // audio.preload = 'auto';
// };

// function playSound() {
//   initAudio();
//   audio.play();
// };

// function stopSound() {
//   audio.pause();
//   audio.currentTime = 0;
// };

// function clickBtnSound() {
//   let btnaudio = document.createElement("button");
//   btnaudio.className = "btnaudio";
//   btnaudio.style.display = "none";
//   document.body.appendChild(btnaudio);
//   let btnAudio = document.querySelector(".btnaudio");
//   btnAudio.onclick = () => {
//     // playSound();
//   };
//   // setTimeout(() => {
//   //   btnaudio.click();
//   // }, 1000);
// };

// document.addEventListener('keydown', function(e) {
//   if ((e.ctrlKey && e.key === 'm') || (e.ctrlKey && e.key === 'M') || (e.ctrlKey && e.key === ',')) {
//     if (containerFluid.classList.contains("min-container-fluid")) {
//       if (zoomInOrOut.innerHTML == `<i class="fa-solid fa-up-right-and-down-left-from-center"></i>`) {
//         zoomInOrOut.innerHTML = `<i class="fa-solid fa-maximize"></i>`;
//         stateBtnMove = `<i class="fa-solid fa-maximize"></i>`;
//         checkMove();
//       } else {
//         zoomInOrOut.innerHTML = `<i class="fa-solid fa-up-right-and-down-left-from-center"></i>`;
//         stateBtnMove = `<i class="fa-solid fa-up-right-and-down-left-from-center"></i>`;
//       };
//     };
//   };
// });

// zoomInOrOut.onclick = () => {
//   containerFluid.classList.toggle("min-container-fluid");
//   if (containerFluid.classList.contains("min-container-fluid")) {
//     zoomInOrOut.innerHTML = `<i class="fa-solid fa-up-right-and-down-left-from-center"></i>`;
//     stateBtnMove = `<i class="fa-solid fa-up-right-and-down-left-from-center"></i>`;
//     if (zoomInOrOut.innerHTML == `<i class="fa-solid fa-down-left-and-up-right-to-center"></i>`) {
//       containerFluid.style.transform = `translate(0px, 0px)`;
//     };
//     document.body.style.overflow = "auto";
//   } else {
//     zoomInOrOut.innerHTML = `<i class="fa-solid fa-down-left-and-up-right-to-center"></i>`;
//     stateBtnMove = `<i class="fa-solid fa-down-left-and-up-right-to-center"></i>`;
//     if (zoomInOrOut.innerHTML == `<i class="fa-solid fa-down-left-and-up-right-to-center"></i>`) {
//       containerFluid.style.transform = `translate(0px, 0px)`;
//     };
//     document.body.style.overflow = "hidden";
//   };
// };

// function checkMove() {
//   if (zoomInOrOut.innerHTML == `<i class="fa-solid fa-maximize"></i>`) {
//     if (containerFluid.classList.contains("min-container-fluid")) {
//       moveContainerFluid();
//     };
//     function moveContainerFluid() {
//       zoomInOrOut.addEventListener("mousedown", function(event) {
//         isLongPress = true;
//         document.addEventListener('mousemove', moveElement);
//         zoomInOrOut.addEventListener('click', function () {
//           containerFluid.classList.toggle("min-container-fluid");
//           if (containerFluid.classList.contains("min-container-fluid")) {
//             zoomInOrOut.innerHTML = `<i class="fa-solid fa-up-right-and-down-left-from-center"></i>`;
//             stateBtnMove = `<i class="fa-solid fa-up-right-and-down-left-from-center"></i>`;
//             if (zoomInOrOut.innerHTML == `<i class="fa-solid fa-down-left-and-up-right-to-center"></i>`) {
//               containerFluid.style.transform = `translate(0px, 0px)`;
//             };
//           } else {
//             zoomInOrOut.innerHTML = `<i class="fa-solid fa-down-left-and-up-right-to-center"></i>`;
//             stateBtnMove = `<i class="fa-solid fa-down-left-and-up-right-to-center"></i>`;
//             if (zoomInOrOut.innerHTML == `<i class="fa-solid fa-down-left-and-up-right-to-center"></i>`) {
//               containerFluid.style.transform = `translate(0px, 0px)`;
//             };
//           };
//         });
//       });
//       document.addEventListener("mouseup", function() {
//         document.removeEventListener('mousemove', moveElement);
//         zoomInOrOut.innerHTML = stateBtnMove;
//         isLongPress = false;
//       });
//       document.addEventListener("mouseleave", function() {
//         document.removeEventListener('mousemove', moveElement);
//         zoomInOrOut.innerHTML = stateBtnMove;
//         isLongPress = false;
//       });
//       function moveElement(e) {
//         let mouseX = e.pageX - 1200;
//         let mouseY = e.pageY - 50;
//         containerFluid.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
//       };
//     };
//   };
// };

// window.onload = () => {
//   setTimeout(() => {
//     videoContainer.classList.add("alter-height-video-container");
//     controls.classList.add("hidden-controls");
//     info.classList.add("hidden-room-info");
//     list.classList.add("hidden-list");
//     list.classList.remove("show-list");
//   }, 5000);
//   window.scrollTo(0, 0);
// };

// window.addEventListener('mousemove', () => {
//   videoContainer.classList.remove("alter-height-video-container");
//   controls.classList.remove("hidden-controls");
//   info.classList.remove("hidden-room-info");
//   list.classList.remove("hidden-list");
//   clearTimeout(idleTimer);
//   idleTimer = setTimeout(() => {
//     videoContainer.classList.add("alter-height-video-container");
//     controls.classList.add("hidden-controls");
//     info.classList.add("hidden-room-info");
//     list.classList.add("hidden-list");
//     list.classList.remove("show-list");
//   }, 5000);
// });

// function nameFilter(name) {
//   return name.charAt(0);
// };

// function animateAudioLevel(analyser, dataArray, elements) {
//   async function tick() {
//     if (analyser.context.state === 'suspended') {
//       await analyser.context.resume();
//     };
//     analyser.getByteFrequencyData(dataArray);
//     let sum = 0;
//     for (let v of dataArray) sum += v;
//     const average = sum / dataArray.length;
//     const scale = 1 + (average / 255) * 3;
//     elements.style.transform = `scale(${scale})`;
//     elements.style.transformOrigin = 'center';
//     requestAnimationFrame(tick);
//   };
//   tick();
// };

// function checkAudioOrVideoMy(check, lastRemoteStream = null) {
//   if (check === 'audio') {
//     toggleVideoBtn.classList.add("in-use");
//     myVideo.innerHTML = "";
//     let divAudio = document.createElement("div");
//     let paragraphAudio = document.createElement("p");
//     divAudio.className = "audio";
//     paragraphAudio.innerHTML = nameFilter(nameMe);
//     paragraphAudio.className = "vibration-me";
//     divAudio.appendChild(paragraphAudio);
//     myVideo.appendChild(divAudio);
//     let vibrationElems = document.querySelector(".vibration-me");
//     const audioCtxLocal = new AudioContext();
//     const analyserLocal = audioCtxLocal.createAnalyser();
//     analyserLocal.fftSize = 256;
//     const sourceLocal   = audioCtxLocal.createMediaStreamSource(localStream);
//     sourceLocal.connect(analyserLocal);
//     const dataArrayLocal = new Uint8Array(analyserLocal.frequencyBinCount);
//     animateAudioLevel(analyserLocal, dataArrayLocal, vibrationElems);
//   } else {
//     toggleVideoBtn.classList.remove("in-use");
//     myVideo.innerHTML = "";
//     let video = document.createElement("video");
//     let divVideo = document.createElement("div");
//     video.setAttribute("id", "local-video");
//     video.autoplay = true;
//     video.playsInline = true;
//     video.muted = true;
//     navigator.mediaDevices.getUserMedia({
//       video: true,
//       audio: true
//     })
//     .then(stream => {
//       localStream = stream;
//       if (lastRemoteStream !== null) {
//         video.srcObject = lastRemoteStream;
//       } else {
//         video.srcObject = stream;
//       };
//     });
//     divVideo.className = "video-label";
//     divVideo.innerHTML = "You";
//     myVideo.appendChild(video);
//     myVideo.appendChild(divVideo);
//   };
// };

// function checkAudioOrVideoThePerson(check, lastRemoteStream = null) {
//   if (check === 'audio') {
//     heVideo.innerHTML = "";
//     if (lastRemoteStream) {
//       let audio = document.createElement("audio");
//       audio.autoplay = true;
//       audio.srcObject = lastRemoteStream;
//       heVideo.appendChild(audio);
//     };
//     let divAudio = document.createElement("div");
//     let paragraphAudio = document.createElement("p");
//     divAudio.className = "audio";
//     paragraphAudio.innerHTML = nameFilter(nameHe);
//     paragraphAudio.className = "vibration-he";
//     divAudio.appendChild(paragraphAudio);
//     heVideo.appendChild(divAudio);
//     if (lastRemoteStream instanceof MediaStream) {
//       let vibrationElems = document.querySelector(".vibration-he");
//       const audioCtxRemote = new AudioContext();
//       const analyserRemote = audioCtxRemote.createAnalyser();
//       analyserRemote.fftSize = 256;
//       const sourceRemote   = audioCtxRemote.createMediaStreamSource(lastRemoteStream);
//       sourceRemote.connect(analyserRemote);
//       const dataArrayRemote = new Uint8Array(analyserRemote.frequencyBinCount);
//       animateAudioLevel(analyserRemote, dataArrayRemote, vibrationElems);
//     };
//   } else {
//     heVideo.innerHTML = "";
//     constraints = { video: true,  audio: true };
//     let video = document.createElement("video");
//     let label = document.createElement("div");
//     video.id = "remote-video";
//     video.autoplay = true;
//     video.playsInline = true;
//     video.srcObject = lastRemoteStream;
//     label.className = "video-label";
//     label.textContent = "The other person";
//     heVideo.appendChild(video);
//     heVideo.appendChild(label);
//   };
// };

// function isertUrlCall(extra) {
//   // fetch(urlCallEndpoint, {
//   //   method: 'POST',
//   //   headers: {
//   //     'Content-Type': 'application/json',
//   //     'X-CSRF-TOKEN': token,
//   //     'Accept': 'application/json'
//   //   },
//   //   body: JSON.stringify({ extra })
//   // }).then(response => {
//   //   if (!response.ok) {
//   //     throw new Error(`HTTP error! Status: ${response.status}`);
//   //   };
//   //   return response.text();
//   // })
// };

// function endTheCall(state) {
//   // fetch(endCall, {
//   //   method: 'POST',
//   //   headers: {
//   //     'Content-Type': 'application/json',
//   //     'X-CSRF-TOKEN': token,
//   //     'Accept': 'application/json'
//   //   },
//   //   body: JSON.stringify({ state })
//   // }).then(response => {
//   //   if (!response.ok) {
//   //     throw new Error(`HTTP error! Status: ${response.status}`);
//   //   };
//   //   return response.text();
//   // });
// };

// document.addEventListener('DOMContentLoaded', async () => {
//   clickBtnSound();
//   try {
//     localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
//   } catch (err) {
//     console.error('فشل في الحصول على الكاميرا/الميكروفون:', err);
//     showNotification('لا يمكن الوصول للكاميرا/الميكروفون');
//     return;
//   }
//   if (streamMode === 'audio') {
//     const vt = localStream.getVideoTracks()[0];
//     if (vt) vt.enabled = false;
//   };
//   if (streamMode === 'audio') {
//     checkAudioOrVideoMy("audio");
//   } else {
//     checkAudioOrVideoMy("video");
//     checkAudioOrVideoThePerson("video");
//   };
//   function getPeerFromURL() {
//     const params = new URLSearchParams(window.location.search);
//     return params.get('peer');
//   };
//   const joinPeerId = getPeerFromURL();
//   const remoteVideo = document.getElementById('remote-video');
//   const endCallBtn = document.getElementById('end-call');
//   const shareScreenBtn = document.getElementById('share-screen');
//   const copyLink = document.querySelector('.copy-link');
//   const roomId = document.querySelector('.room-id').getAttribute("data-room-id");
//   let peer = null;
//   let conn = null;
// peer = new Peer(undefined, {
//   host: '0.peerjs.com',
//   port: 443,
//   secure: true
// });
//   peer.on('open', (peerId) => {
//     const link = window.location.origin + window.location.pathname + '?peer=' + peerId;
//     if (!joinPeerId) {
//       isertUrlCall(link);
//     };
//     copyLink.onclick = () => {
//       const link = window.location.origin + window.location.pathname + '?peer=' + peerId;
//       navigator.clipboard.writeText(link)
//       .then(() => {
//         showNotification('تم نسخ رابط الغرفة إلى الحافظة!');
//       })
//       .catch(err => {
//         console.error('Failed to copy: ', err);
//       });
//     };
//     setTimeout(() => {
//       showNotification('انسخ الرابط وأرسله للشخص الآخر!');
//     }, 1000);
//     setTimeout(() => {
//       startCall();
//     }, 1500);
//   });
//   peer.on('connection', (connection) => {
//     conn = connection;
//     conn.on('data', (data) => {
//       if (data === 'joined') {
//         myVideo.classList.toggle("start-call");
//       } else if (data === 'close') {
//         myVideo.classList.remove("start-call");
//         heVideo.innerHTML = "";
//       } else if (data === 'remote-video-on') {
//         streamMode = 'video';
//         checkAudioOrVideoThePerson('video', lastRemoteStream);
//       } else if (data === 'remote-audio-only') {
//         streamMode = 'audio';
//         checkAudioOrVideoThePerson('audio', lastRemoteStream);
//       };
//     });
//   });
//   peer.on('disconnected', () => {
//     console.warn('PeerJS disconnected');
//     // window.location.href = window.APP_BASE_URL;
//   });
//   if (streamMode === 'audio') {
//     localStream.getVideoTracks()[0].enabled = false;
//   };
//   peer.on('call', (call) => {
//     currentCall = call;
//     if (streamMode === 'audio') {
//       const vt = localStream.getVideoTracks()[0];
//       if (vt) vt.enabled = false;
//     };
//     navigator.mediaDevices.getUserMedia({
//       video: true,
//       audio: true
//     })
//     .then(stream => {
//       localStream = stream;
//       if (localVideo) localVideo.srcObject = stream;
//       call.answer(stream);
//       call.on('stream', (remoteStream) => {
//         lastRemoteStream = remoteStream;
//         if (remoteVideo) remoteVideo.srcObject = remoteStream;
//         checkAudioOrVideoThePerson(streamMode, lastRemoteStream);
//       });
//       call.on('close', () => {
//         showNotification("تم انهاء المكالمة");
//         window.location.href = window.APP_BASE_URL;
//         myVideo.classList.toggle("start-call");
//       });
//     })
//     .catch(err => {
//       console.error('Error accessing media devices:', err);
//     });
//   });
//   function startCall() {
//     navigator.mediaDevices.getUserMedia({
//       video: true,
//       audio: true
//     })
//     .then(stream => {
//       localStream = stream;
//       if (streamMode === 'audio') {
//         const vt = localStream.getVideoTracks()[0];
//         if (vt) vt.enabled = false;
//       };
//       if (localVideo) localVideo.srcObject = stream;
//       if (joinPeerId) {
//         const call = peer.call(joinPeerId, stream);
//         currentCall = call;
//         conn = peer.connect(joinPeerId);
//         conn.on('open', () => {
//           myVideo.classList.toggle("start-call");
//           conn.send('joined');
//           conn.send(streamMode === 'video' ? 'remote-video-on' : 'remote-audio-only');
//         });
//         call.on('stream', remoteStream => {
//           lastRemoteStream = remoteStream;
//           if (remoteVideo) remoteVideo.srcObject = remoteStream;
//           if (streamMode === 'audio') {
//             checkAudioOrVideoThePerson('audio', lastRemoteStream);
//           } else {
//             checkAudioOrVideoThePerson('video', lastRemoteStream);
//           };
//         });
//         call.on('close', () => {
//           myVideo.classList.remove("start-call");
//           conn.send('close');
//           showNotification("تم انهاء المكالمة");
//           window.location.href = window.APP_BASE_URL;
//         });
//         conn.on('data', data => {
//           if (data === 'close') {
//             myVideo.classList.remove("start-call");
//             heVideo.innerHTML = "";
//           } else if (data === 'remote-video-on') {
//             checkAudioOrVideoThePerson('video', lastRemoteStream);
//           } else if (data === 'remote-audio-only') {
//             checkAudioOrVideoThePerson('audio', lastRemoteStream);
//           }
//         });
//       } else {
//         console.log('Initiator: بثّك جاهز، في انتظار أن يتصل بك الآخر...');
//       }
//     })
//     .catch(err => {
//       console.error('Error accessing media devices:', err);
//       showNotification('لا يمكن الوصول إلى الكاميرا/الميكروفون');
//     });
//   }
//   function showNotification(message) {
//     const notification = document.createElement('div');
//     notification.textContent = message;
//     notification.style.position = 'fixed';
//     notification.style.top = '20px';
//     notification.style.right = '20px';
//     notification.style.padding = '15px 25px';
//     notification.style.background = 'rgba(26, 188, 156, 0.9)';
//     notification.style.color = 'white';
//     notification.style.borderRadius = '10px';
//     notification.style.zIndex = '1000';
//     notification.style.boxShadow = '0 5px 15px rgba(0,0,0,0.3)';
//     notification.style.animation = 'fadeIn 0.3s, fadeOut 0.3s 2.7s';
//     document.body.appendChild(notification);
//     setTimeout(() => {
//       notification.remove();
//     }, 3000);
//   };
//   toggleVideoBtn.addEventListener('click', async () => {
//     if (streamMode == 'audio') {
//       streamMode = 'video';
//       const vt = localStream.getVideoTracks()[0];
//       if (vt) vt.enabled = true;
//       checkAudioOrVideoMy("video");
//     } else {
//       streamMode = 'audio';
//       const vt = localStream.getVideoTracks()[0];
//       if (vt) vt.enabled = false;
//       checkAudioOrVideoMy("audio");
//     };
//     toggleVideoBtn.style.background = (streamMode === 'video')
//     ? toggleVideoBtn.classList.remove("in-use")
//     : toggleVideoBtn.classList.add("in-use");
//     if (conn && conn.open) {
//       conn.send(streamMode === 'video' ? 'remote-video-on' : 'remote-audio-only');
//     };
//   });
//   toggleMicBtn.addEventListener('click', () => {
//     const sender = currentCall.peerConnection.getSenders().find(s => s.track && s.track.kind === 'audio');
//     const audioTrack = localStream.getAudioTracks()[0];
//     if (audioState) {
//       audioState = false;
//       audioTrack.enabled = false;
//       sender.replaceTrack(audioTrack);
//       toggleMicBtn.classList.add("in-use");
//     } else {
//       audioState = true;
//       audioTrack.enabled = true;
//       sender.replaceTrack(audioTrack);
//       toggleMicBtn.classList.remove("in-use");
//     };
//   });
//   const style = document.createElement('style');
//   style.textContent = `
//     @keyframes fadeIn {
//       from { opacity: 0; transform: translateY(-20px); }
//       to { opacity: 1; transform: translateY(0); }
//     }
//     @keyframes fadeOut {
//       from { opacity: 1; transform: translateY(0); }
//       to { opacity: 0; transform: translateY(-20px); }
//     }
//   `;
//   document.head.appendChild(style);
//   shareScreenBtn.addEventListener('click', async () => {
//     const prevMode   = streamMode;
//     const prevStream = localStream;
//     try {
//       const screenStream = await navigator.mediaDevices.getDisplayMedia({ video: true });
//       const audioStream  = await navigator.mediaDevices.getUserMedia({ audio: true });
//       const combinedStream = new MediaStream([
//         ...screenStream.getVideoTracks(),
//         ...audioStream.getAudioTracks()
//       ]);
//       prevStream.getVideoTracks()[0].enabled = false;
//       localStream = combinedStream;
//       streamMode  = 'video';
//       checkAudioOrVideoMy('video', combinedStream);
//       if (conn && conn.open) conn.send('remote-video-on');
//       if (currentCall) {
//         shareScreenBtn.classList.add("in-use");
//         const sender = currentCall.peerConnection.getSenders()
//           .find(s => s.track.kind === 'video');
//         if (sender) sender.replaceTrack(combinedStream.getVideoTracks()[0]);
//       } else if (joinPeerId) {
//         const call = peer.call(joinPeerId, combinedStream);
//         currentCall = call;
//         call.on('stream', remoteStream => {
//           lastRemoteStream = remoteStream;
//           checkAudioOrVideoThePerson('video', remoteStream);
//         });
//       };
//       screenStream.getVideoTracks()[0].onended = () => {
//         shareScreenBtn.classList.remove("in-use");
//         localStream = prevStream;
//         streamMode  = prevMode;
//         prevStream.getVideoTracks()[0].enabled = (prevMode === 'video');
//         prevStream.getAudioTracks()[0].enabled = true;
//         checkAudioOrVideoMy(prevMode, prevStream);
//         if (currentCall) {
//           const videoSender = currentCall.peerConnection.getSenders().find(s => s.track.kind === 'video');
//           if (videoSender) videoSender.replaceTrack(prevStream.getVideoTracks()[0]);
//           const audioSender = currentCall.peerConnection.getSenders().find(s => s.track.kind === 'audio');
//           if (audioSender) audioSender.replaceTrack(prevStream.getAudioTracks()[0]);
//         };
//         lastRemoteStream = prevStream;
//         const remoteVideoElem = document.getElementById('remote-video');
//         if (remoteVideoElem) {
//           remoteVideoElem.srcObject = lastRemoteStream;
//         };
//         checkAudioOrVideoThePerson(prevMode, lastRemoteStream);
//         if (conn && conn.open) {
//           conn.send(prevMode === 'video' ? 'remote-video-on' : 'remote-audio-only');
//         };
//       };
//     } catch (err) {
//       console.error('Error sharing screen:', err);
//       showNotification('فشل في بث الشاشة');
//     };
//   });
//   endCallBtn.addEventListener('click', () => {
//     endTheCall("Done");
//     if (localStream) {
//       localStream.getTracks().forEach(track => track.stop());
//     };
//     const remoteVideo = document.getElementById('remote-video');
//     if (remoteVideo && remoteVideo.srcObject) {
//       remoteVideo.srcObject.getTracks().forEach(track => track.stop());
//     };
//     if (conn && conn.open) {
//       conn.send('close');
//     } else {
//       console.warn('DataConnection is not open; cannot send close');
//     };
//     if (peer) {
//       peer.destroy();
//     };
//     window.location.href = window.APP_BASE_URL;
//   });
//   more.addEventListener('click', () => {
//     list.classList.toggle("show-list");
//   });
//   window.addEventListener("unload", function (e) {
//     if (localStream) {
//       localStream.getTracks().forEach(track => track.stop());
//     };
//     const remoteVideo = document.getElementById('remote-video');
//     if (remoteVideo && remoteVideo.srcObject) {
//       remoteVideo.srcObject.getTracks().forEach(track => track.stop());
//     };
//     if (conn && conn.open) {
//       conn.send('close');
//     } else {
//       console.warn('DataConnection is not open; cannot send close');
//     };
//     if (peer) {
//       peer.destroy();
//     };
//     window.location.href = window.APP_BASE_URL;
//   });
// });

const videoContainer = document.querySelector(".video-container");
const controls = document.querySelector(".controls");
const info = document.querySelector(".info");
const myVideo = document.querySelector(".my-video");
const heVideo = document.querySelector(".he-video");
const containerFluid = document.querySelector(".container-fluid");
const zoomInOrOut = document.querySelector(".zoom-in-or-out");
const list = document.querySelector(".list");
const toggleVideoBtn = document.getElementById("toggle-video");
const toggleMicBtn = document.getElementById("toggle-mic");
const shareScreenBtn = document.getElementById("share-screen");
const endCallBtn = document.getElementById("end-call");
const more = document.getElementById("more");
const copyLinkBtn = document.getElementById("copy-link");

let streamMode = "video";
let nameMe = "kareem";
let nameHe = "abdo";
let token = document.querySelector('meta[name="csrf-token"]')?.getAttribute("content");

let idleTimer;
let lastRemoteStream = null;
let currentCall = null;
let localStream = null;
let audioState = true;
let isLongPress = false;
let stateBtnMove = "";

let peer = null;
let conn = null;

function playSound() {}
function stopSound() {}

function clickBtnSound() {
  const btnaudio = document.createElement("button");
  btnaudio.className = "btnaudio";
  btnaudio.style.display = "none";
  document.body.appendChild(btnaudio);
}

function nameFilter(name) {
  return name ? name.charAt(0).toUpperCase() : "?";
}

function showNotification(message) {
  const notification = document.createElement("div");
  notification.textContent = message;
  notification.className = "app-notification";
  document.body.appendChild(notification);

  setTimeout(() => {
    notification.classList.add("hide");
  }, 2500);

  setTimeout(() => {
    notification.remove();
  }, 3000);
}

function setLocalVideoPreview(stream) {
  myVideo.innerHTML = "";

  const video = document.createElement("video");
  video.id = "local-video";
  video.autoplay = true;
  video.playsInline = true;
  video.muted = true;
  video.srcObject = stream;

  myVideo.appendChild(video);

  video.onloadedmetadata = async () => {
    console.log("local:", video.videoWidth, video.videoHeight);
    try {
      await video.play();
    } catch (e) {
      console.error("Local video play failed:", e);
    }
  };
}

function setRemoteVideo(stream) {
  heVideo.innerHTML = "";

  const video = document.createElement("video");
  video.id = "remote-video";
  video.autoplay = true;
  video.playsInline = true;
  video.srcObject = stream;

  heVideo.appendChild(video);

  video.onloadedmetadata = async () => {
    console.log("remote:", video.videoWidth, video.videoHeight);
    try {
      await video.play();
    } catch (e) {
      console.error("Remote video play failed:", e);
    }
  };
}

function setLocalAudioBubble() {
  myVideo.innerHTML = "";

  const wrapper = document.createElement("div");
  wrapper.className = "audio";

  const bubble = document.createElement("p");
  bubble.className = "vibration-me";
  bubble.textContent = nameFilter(nameMe);

  wrapper.appendChild(bubble);
  myVideo.appendChild(wrapper);
}

// function setRemoteVideo(stream) {
//   heVideo.innerHTML = "";

//   const video = document.createElement("video");
//   video.id = "remote-video";
//   video.autoplay = true;
//   video.playsInline = true;
//   video.muted = false;
//   video.srcObject = stream;

//   heVideo.appendChild(video);

//   video.onloadedmetadata = async () => {
//     try {
//       await video.play();
//     } catch (e) {
//       console.error("Remote video play failed:", e);
//     }
//   };
// }

function setRemoteAudioBubble(stream) {
  heVideo.innerHTML = "";

  if (stream instanceof MediaStream) {
    const audio = document.createElement("audio");
    audio.autoplay = true;
    audio.srcObject = stream;
    heVideo.appendChild(audio);
  }

  const wrapper = document.createElement("div");
  wrapper.className = "audio";

  const bubble = document.createElement("p");
  bubble.className = "vibration-he";
  bubble.textContent = nameFilter(nameHe);

  wrapper.appendChild(bubble);
  heVideo.appendChild(wrapper);
}

async function initLocalStream() {
  if (localStream) return localStream;

  localStream = await navigator.mediaDevices.getUserMedia({
    video: true,
    audio: true
  });

  if (streamMode === "audio") {
    const vt = localStream.getVideoTracks()[0];
    if (vt) vt.enabled = false;
  }

  return localStream;
}

function getPeerFromURL() {
  const params = new URLSearchParams(window.location.search);
  return params.get("peer");
}

function renderMyView() {
  if (streamMode === "audio") {
    toggleVideoBtn.classList.add("in-use");
    setLocalAudioBubble();
  } else {
    toggleVideoBtn.classList.remove("in-use");
    setLocalVideoPreview(localStream);
  }
}

function renderRemoteView(stream) {
  if (!stream) return;

  const hasVideoTrack = stream.getVideoTracks().length > 0;

  if (hasVideoTrack) {
    setRemoteVideo(stream);
  } else {
    setRemoteAudioBubble(stream);
  }
}

function updateControlLayout() {
  videoContainer.classList.remove("alter-height-video-container");
  controls.classList.remove("hidden-controls");
  info.classList.remove("hidden-room-info");
  list.classList.remove("hidden-list");
  clearTimeout(idleTimer);

  idleTimer = setTimeout(() => {
    videoContainer.classList.add("alter-height-video-container");
    controls.classList.add("hidden-controls");
    info.classList.add("hidden-room-info");
    list.classList.add("hidden-list");
    list.classList.remove("show-list");
  }, 5000);
}

window.addEventListener("mousemove", updateControlLayout);

window.addEventListener("load", () => {
  setTimeout(() => {
    videoContainer.classList.add("alter-height-video-container");
    controls.classList.add("hidden-controls");
    info.classList.add("hidden-room-info");
    list.classList.add("hidden-list");
    list.classList.remove("show-list");
  }, 5000);

  window.scrollTo(0, 0);
});

function setupPeer() {
  peer = new Peer();

  peer.on("open", (peerId) => {
    const roomLink = `${window.location.origin}${window.location.pathname}?peer=${peerId}`;

    if (!getPeerFromURL()) {
      copyLinkBtn.dataset.roomLink = roomLink;
    } else {
      copyLinkBtn.dataset.roomLink = window.location.href;
    }

    copyLinkBtn.addEventListener("click", async () => {
      const link = copyLinkBtn.dataset.roomLink || roomLink;
      try {
        await navigator.clipboard.writeText(link);
        showNotification("تم نسخ رابط الغرفة إلى الحافظة");
      } catch (err) {
        console.error("Copy failed:", err);
        showNotification("فشل نسخ الرابط");
      }
    });

    setTimeout(() => {
      showNotification("انسخ الرابط وأرسله للشخص الآخر");
    }, 1000);

    startCall();
  });

  peer.on("connection", (connection) => {
    conn = connection;

    conn.on("data", (data) => {
      if (data === "joined") {
        myVideo.classList.add("start-call");
      } else if (data === "close") {
        myVideo.classList.remove("start-call");
        heVideo.innerHTML = "";
      } else if (data === "remote-video-on") {
        renderRemoteView(lastRemoteStream);
      }
      else if (data === "remote-audio-only") {
        setRemoteAudioBubble(lastRemoteStream);
      }
    });
  });

  peer.on("disconnected", () => {
    console.warn("PeerJS disconnected");
  });

  peer.on("call", (call) => {
    currentCall = call;

    call.answer(localStream);

    call.on("stream", (remoteStream) => {
        console.log("remote stream tracks:", remoteStream.getTracks().map(t => ({
    kind: t.kind,
    enabled: t.enabled,
    readyState: t.readyState
  })));

      lastRemoteStream = remoteStream;
      renderRemoteView(remoteStream);
    });

    call.on("close", () => {
      showNotification("تم انهاء المكالمة");
      myVideo.classList.remove("start-call");
    });
  });
}

async function startCall() {
  try {
    await initLocalStream();
    renderMyView();

    const joinPeerId = getPeerFromURL();

    if (!joinPeerId) {
      console.log("Initiator ready, waiting for the other person...");
      return;
    }

    const call = peer.call(joinPeerId, localStream);
    currentCall = call;

    conn = peer.connect(joinPeerId);

    conn.on("open", () => {
      myVideo.classList.add("start-call");
      conn.send("joined");
      conn.send(streamMode === "video" ? "remote-video-on" : "remote-audio-only");
    });

    call.on("stream", (remoteStream) => {
      lastRemoteStream = remoteStream;
      renderRemoteView(remoteStream);
    });

    call.on("close", () => {
      myVideo.classList.remove("start-call");
      if (conn && conn.open) conn.send("close");
      showNotification("تم انهاء المكالمة");
      window.location.href = window.APP_BASE_URL;
    });

    conn.on("data", (data) => {
      if (data === "close") {
        myVideo.classList.remove("start-call");
        heVideo.innerHTML = "";
      } else if (data === "remote-video-on") {
        renderRemoteView(lastRemoteStream);
      }
      else if (data === "remote-audio-only") {
        setRemoteAudioBubble(lastRemoteStream);
      }
    });
  } catch (err) {
    console.error("Error accessing media devices:", err);
    showNotification("لا يمكن الوصول إلى الكاميرا/الميكروفون");
  }
}

document.addEventListener("DOMContentLoaded", async () => {
  clickBtnSound();

  try {
    await initLocalStream();
  } catch (err) {
    console.error("فشل في الحصول على الكاميرا/الميكروفون:", err);
    showNotification("لا يمكن الوصول للكاميرا/الميكروفون");
    return;
  }

  renderMyView();
  setupPeer();

  toggleVideoBtn.addEventListener("click", async () => {
    if (!localStream) return;

    const vt = localStream.getVideoTracks()[0];

    if (streamMode === "audio") {
      streamMode = "video";
      if (vt) vt.enabled = true;
    } else {
      streamMode = "audio";
      if (vt) vt.enabled = false;
    }

    renderMyView();

    if (conn && conn.open) {
      conn.send(streamMode === "video" ? "remote-video-on" : "remote-audio-only");
    }
  });

  toggleMicBtn.addEventListener("click", () => {
    if (!localStream) return;

    const audioTrack = localStream.getAudioTracks()[0];
    const sender = currentCall?.peerConnection
      ?.getSenders()
      ?.find((s) => s.track && s.track.kind === "audio");

    if (!audioTrack) return;

    audioState = !audioState;
    audioTrack.enabled = audioState;

    if (sender) {
      sender.replaceTrack(audioTrack);
    }

    toggleMicBtn.classList.toggle("in-use", !audioState);
  });

  shareScreenBtn.addEventListener("click", async () => {
    try {
      const prevStream = localStream;
      const prevMode = streamMode;

      const screenStream = await navigator.mediaDevices.getDisplayMedia({
        video: true,
        audio: false
      });

      const screenTrack = screenStream.getVideoTracks()[0];
      const videoSender = currentCall?.peerConnection
        ?.getSenders()
        ?.find((s) => s.track && s.track.kind === "video");

      if (videoSender && screenTrack) {
        videoSender.replaceTrack(screenTrack);
      }

      localStream = new MediaStream([
        screenTrack,
        ...prevStream.getAudioTracks()
      ]);

      streamMode = "video";
      renderMyView();

      if (conn && conn.open) {
        conn.send("remote-video-on");
      }

      screenTrack.onended = async () => {
        localStream = prevStream;
        streamMode = prevMode;
        renderMyView();

        const restoreSender = currentCall?.peerConnection
          ?.getSenders()
          ?.find((s) => s.track && s.track.kind === "video");

        const cameraTrack = prevStream.getVideoTracks()[0];
        if (restoreSender && cameraTrack) {
          restoreSender.replaceTrack(cameraTrack);
        }

        if (conn && conn.open) {
          conn.send(prevMode === "video" ? "remote-video-on" : "remote-audio-only");
        }
      };
    } catch (err) {
      console.error("Error sharing screen:", err);
      showNotification("فشل في بث الشاشة");
    }
  });

  endCallBtn.addEventListener("click", () => {
    if (localStream) {
      localStream.getTracks().forEach((track) => track.stop());
    }

    const remoteVideo = document.getElementById("remote-video");
    if (remoteVideo?.srcObject) {
      remoteVideo.srcObject.getTracks().forEach((track) => track.stop());
    }

    if (conn && conn.open) {
      conn.send("close");
    }

    if (peer) {
      peer.destroy();
    }

    window.location.href = window.APP_BASE_URL;
  });

  more.addEventListener("click", () => {
    list.classList.toggle("show-list");
  });

  window.addEventListener("pagehide", () => {
    if (localStream) {
      localStream.getTracks().forEach((track) => track.stop());
    }

    const remoteVideo = document.getElementById("remote-video");
    if (remoteVideo?.srcObject) {
      remoteVideo.srcObject.getTracks().forEach((track) => track.stop());
    }

    if (conn && conn.open) {
      conn.send("close");
    }

    if (peer) {
      peer.destroy();
    }
  });
});
