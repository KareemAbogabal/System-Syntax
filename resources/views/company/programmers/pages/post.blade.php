@extends('company.programmers.main')

@section('title', 'Post')

@section('page')
  <div class="post-page">
    <div class="ambient"></div>

    <section class="card-inner hero-card">
      <div class="head">
        <div class="brand">
          <div class="logo" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M4 7.5l8-4 8 4v9l-8 4-8-4v-9z"></path>
              <path d="M12 7v9"></path>
              <path d="M8.5 9.2L12 11l3.5-1.8"></path>
            </svg>
          </div>
          <div>
            <p class="eyebrow">Company Portfolio</p>
            <h1>Add Project Post</h1>
            <p class="sub">Keep the upload flow polished: type the project name, choose images from the hidden file input, then publish from a clean parent card.</p>
          </div>
        </div>
        <div class="status"><span class="dot"></span> Ready to publish</div>
      </div>

      <div class="stats">
        <div class="stat primary card-inner">
          <div class="label">Uploaded projects</div>
          <div class="value">24</div>
          <div class="hint">Projects already published in the portfolio</div>
        </div>
        <div class="stat success card-inner">
          <div class="label">Selected images</div>
          <div class="value" id="imageCountHero">0</div>
          <div class="hint">Live preview updates as soon as images are chosen</div>
        </div>
        <div class="stat warning card-inner">
          <div class="label">Pending review</div>
          <div class="value">5</div>
          <div class="hint">Projects that still need final checking</div>
        </div>
      </div>
    </section>

    <section class="card-inner form-card">
      <div class="section-head">
        <div>
          <h2>Project details</h2>
          <p>The main input stays inside a parent card, the upload input stays hidden, and the chosen images appear as premium preview cards with actions.</p>
        </div>
        <div class="badge">Portfolio Post</div>
      </div>

      <div class="project-form-grid">
        <form action="" method="POST" enctype="multipart/form-data" class="project-form" id="projectForm">
          @csrf

          <div class="project-entry-card">
            <div class="field">
              <label for="projectName">Project name</label>
              <input id="projectName" class="input" type="text" placeholder="e.g. E-commerce platform redesign" autocomplete="off" />
            </div>

            <div class="upload-card">
              <div class="upload-card-top">
                <div>
                  <strong>Project images</strong>
                  <p>Upload one or more images. The input stays hidden so the control feels premium and uncluttered.</p>
                </div>
                <span class="upload-chip">Hidden input</span>
              </div>

              <input id="projectImages" class="upload-input" type="file" accept="image/*" multiple />

              <div class="upload-actions">
                <button class="btn btn-secondary" type="button" id="chooseImagesBtn">Choose images</button>
                <button class="btn btn-tertiary" type="button" id="clearImagesBtn">Clear selection</button>
              </div>

              <div class="hint">Accepted formats: PNG, JPG, JPEG, WEBP, GIF</div>
            </div>
            <button class="btn btn-send" type="submit">Publish Project</button>
          </div>

        </form>

        <section class="preview-shell">
          <div class="preview-head">
            <div>
              <h3>Preview cards</h3>
              <p>Each selected image becomes a polished card that shows the project name and the original file name.</p>
            </div>
            <span class="preview-count" id="previewCount">0 images selected</span>
          </div>

          <div class="preview-grid" id="projectPreviewGrid">
            <div class="empty-state" id="emptyPreview">
              Your selected images will appear here as premium project cards.
            </div>
          </div>
        </section>
      </div>
    </section>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const projectName = document.getElementById('projectName');
      const fileInput = document.getElementById('projectImages');
      const chooseButton = document.getElementById('chooseImagesBtn');
      const clearButton = document.getElementById('clearImagesBtn');
      const previewGrid = document.getElementById('projectPreviewGrid');
      const emptyPreview = document.getElementById('emptyPreview');
      const previewCount = document.getElementById('previewCount');
      const imageCountHero = document.getElementById('imageCountHero');

      let selectedFiles = [];
      let objectUrls = [];

      const syncInput = () => {
        const dataTransfer = new DataTransfer();
        selectedFiles.forEach((file) => dataTransfer.items.add(file));
        fileInput.files = dataTransfer.files;
      };

      const clearObjectUrls = () => {
        objectUrls.forEach((url) => URL.revokeObjectURL(url));
        objectUrls = [];
      };

      const getProjectTitle = () => {
        const value = projectName.value.trim();
        return value.length ? value : 'Untitled project';
      };

      const renderPreview = () => {
        clearObjectUrls();
        previewGrid.innerHTML = '';

        const count = selectedFiles.length;
        previewCount.textContent = `${count} image${count === 1 ? '' : 's'} selected`;
        imageCountHero.textContent = String(count);

        if (!count) {
          previewGrid.appendChild(emptyPreview);
          return;
        }

        selectedFiles.forEach((file, index) => {
          const card = document.createElement('article');
          card.className = 'project-card';

          const objectUrl = URL.createObjectURL(file);
          objectUrls.push(objectUrl);

          card.innerHTML = `
            <div class="project-media">
              <img src="${objectUrl}" alt="${file.name}">
              <span class="project-index">#${index + 1}</span>
            </div>

            <div class="project-card-body">
              <div class="project-card-top">
                <div>
                  <p class="project-card-label">Project name</p>
                  <h3>${getProjectTitle()}</h3>
                </div>
                <span class="project-pill">Uploaded image</span>
              </div>

              <p class="project-card-copy">${file.name}</p>

              <div class="project-card-actions">
                <button type="button" class="supervise-button">Supervising</button>

                <form action="" class="delete-form">
                  <button aria-label="Delete item" class="delete-button" type="submit">
                    <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <g id="trash-can">
                        <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                        <g transform-origin="12 18" id="lid-group">
                          <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b"></rect>
                          <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b"></rect>
                        </g>
                      </g>
                    </svg>
                  </button>
                </form>
              </div>
            </div>
          `;

          const deleteForm = card.querySelector('.delete-form');
          deleteForm.addEventListener('submit', (event) => {
            event.preventDefault();
            selectedFiles.splice(index, 1);
            syncInput();
            renderPreview();
          });

          previewGrid.appendChild(card);
        });
      };

      const readSelection = () => {
        selectedFiles = Array.from(fileInput.files || []).filter((file) => file.type.startsWith('image/'));
        syncInput();
        renderPreview();
      };

      chooseButton.addEventListener('click', () => fileInput.click());

      clearButton.addEventListener('click', () => {
        selectedFiles = [];
        fileInput.value = '';
        syncInput();
        renderPreview();
      });

      fileInput.addEventListener('change', readSelection);
      projectName.addEventListener('input', renderPreview);

      renderPreview();
    });
  </script>
@endsection
