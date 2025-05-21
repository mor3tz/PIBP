// Toggle visibility of the comment section
const toggleCommentBtn = document.getElementById('toggle-comment-btn');
const commentSection = document.getElementById('comment-section');

toggleCommentBtn.addEventListener('click', () => {
  if (commentSection.style.display === 'none') {
    commentSection.style.display = 'block';
    toggleCommentBtn.textContent = 'Sembunyikan Komentar';
  } else {
    commentSection.style.display = 'none';
    toggleCommentBtn.textContent = 'Tampilkan Komentar';
  }
});

document.getElementById('favorite-icon').addEventListener('click', function () {
  const icon = document.getElementById('bookmark-icon');

  icon.classList.toggle('active');

  const popup = document.createElement('div');
  popup.id = 'popup-message';
  popup.textContent = 'Tersimpan di Favorite!';

  document.body.appendChild(popup);
  setTimeout(function () {
    popup.remove();
  }, 2000);
});
