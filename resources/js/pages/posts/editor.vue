<template>
  <div class="col-sm-8 editor">
    <div class="card animated fadeInRight fast card-light" v-if="post.html" style="height: 100%">
      <div class="panel__top">
        <div class="panel__devices"></div>
        <div class="panel__actions"></div>
        <div class="panel__switcher"></div>
      </div>
      <div class="editor-row">
        <div class="editor-canvas">
          <div id="gjs"></div>
        </div>
        <div class="panel__right">
          <div class="layers-container"></div>
          <div class="styles-container"></div>
          <div class="traits-container"></div>
          <div id="blocks"></div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import juice from "juice";
export default {
  props: ["post"],
  data() {
    return {
      editor: undefined
    };
  },
  watch: {
    post: function(newVal, oldVal) {
      // watch it
      if (!this.editor) {
        this.init(this.post);
      } else {
        this.editor.setComponents(this.post.html);
        this.editor.setStyle(this.post.css);
      }
    }
  },
  methods: {
    getEditor() {
      return grapesjs.init({
        container: "#gjs",
        fromElement: true,
        forceClass: false,
        height: "100%",
        width: "auto",
        storageManager: false,
        layerManager: {
          appendTo: ".layers-container"
        },
        selectorManager: {
          appendTo: ".styles-container"
        },
        traitManager: {
          appendTo: ".traits-container"
        },
        deviceManager: {
          devices: [
            {
              name: "Desktop",
              width: "" // default size
            },
            {
              name: "Mobile",
              width: "320px", // this value will be used on canvas width
              widthMedia: "480px" // this value will be used in CSS @media
            }
          ]
        },
        panels: {
          defaults: [
            {
              id: "panel-top",
              el: ".panel__top"
            },

            {
              id: "layers",
              el: ".panel__right",
              // Make the panel resizable
              resizable: {
                maxDim: 350,
                minDim: 200,
                tc: 0, // Top handler
                cl: 1, // Left handler
                cr: 0, // Right handler
                bc: 0, // Bottom handler
                // Being a flex child we need to change `flex-basis` property
                // instead of the `width` (default)
                keyWidth: "flex-basis"
              }
            },
            {
              id: "panel-switcher",
              el: ".panel__switcher",
              buttons: [
                {
                  id: "show-blocks",
                  active: true,
                  label: "Blocks",
                  command: "show-blocks",
                  // Once activated disable the possibility to turn it off
                  togglable: false
                },
                {
                  id: "show-layers",
                  active: true,
                  label: "Layers",
                  command: "show-layers",
                  // Once activated disable the possibility to turn it off
                  togglable: false
                },
                {
                  id: "show-style",
                  active: true,
                  label: "Styles",
                  command: "show-styles",
                  togglable: false
                },
                {
                  id: "show-traits",
                  active: true,
                  label: "Traits",
                  command: "show-traits",
                  togglable: false
                }
              ]
            },
            {
              id: "panel-devices",
              el: ".panel__devices",
              buttons: [
                {
                  id: "device-desktop",
                  label: "D",
                  command: "set-device-desktop",
                  active: true,
                  togglable: false
                },
                {
                  id: "device-mobile",
                  label: "M",
                  command: "set-device-mobile",
                  togglable: false
                }
              ]
            },
            {
              id: "panel-actions",
              el: ".panel__actions",
              buttons: [
                {
                  id: "save",
                  label: "Save",
                  command: "save",
                  togglable: false
                }
              ]
            }
          ]
        },
        blockManager: {
          appendTo: "#blocks",
          blocks: [
            {
              id: "title",
              label: "Title",
              content: '<h1>Insert your title here</h1>'
            },
            {
              id: "sub_title",
              label: "Sub Title",
              content:
                '<h2>Insert your sub title here</h2>'
            },
            {
              id: "section", // id is mandatory
              label: "<b>Section</b>", // You can use HTML/SVG inside labels
              attributes: { class: "gjs-block-section" },
              content: `<section>
          <h1>This is a simple title</h1>
          <p>This is just a Lorem text: Lorem ipsum dolor sit amet</p>
        </section>`
            },
            {
              id: "text",
              label: "Text",
              content: '<p data-gjs-type="text">Insert your text here</p>'
            },
            {
              id: "image",
              label: "Image",
              select: true,
              content: { type: "image" },
              activate: true
            }
          ]
        },
        styleManager: {
          appendTo: ".styles-container",
          sectors: [
            {
              name: "Dimension",
              open: false,
              // Use built-in properties
              buildProps: ["width", "min-height", "padding"],
              // Use `properties` to define/override single property
              properties: [
                {
                  // Type of the input,
                  // options: integer | radio | select | color | slider | file | composite | stack
                  type: "integer",
                  name: "The width", // Label for the property
                  property: "width", // CSS property (if buildProps contains it will be extended)
                  units: ["px", "%"], // Units, available only for 'integer' types
                  defaults: "auto", // Default value
                  min: 0 // Min value, available only for 'integer' types
                }
              ]
            },
            {
              name: "Extra",
              open: false,
              buildProps: ["background-color", "box-shadow", "custom-prop"],
              properties: [
                {
                  id: "custom-prop",
                  name: "Custom Label",
                  property: "font-size",
                  type: "select",
                  defaults: "32px",
                  // List of options, available only for 'select' and 'radio'  types
                  options: [
                    { value: "12px", name: "Tiny" },
                    { value: "18px", name: "Medium" },
                    { value: "32px", name: "Big" }
                  ]
                }
              ]
            }
          ]
        }
      });
    },
    init(data) {
      console.log(this);
      requestAnimationFrame(() => {
        this.editor = this.getEditor();
        this.editor.setComponents(data.html);
        this.editor.setStyle(data.css);
        this.editor.Commands.add("show-blocks", {
          getRowEl(editor) {
            return editor.getContainer().closest(".editor-row");
          },
          getLayersEl(row) {
            return row.querySelector("#blocks");
          },

          run(editor, sender) {
            const bmEl = this.getLayersEl(this.getRowEl(editor));
            bmEl.style.display = "";
          },
          stop(editor, sender) {
            const bmEl = this.getLayersEl(this.getRowEl(editor));
            bmEl.style.display = "none";
          }
        });
        this.editor.Commands.add("show-layers", {
          getRowEl(editor) {
            return editor.getContainer().closest(".editor-row");
          },
          getLayersEl(row) {
            return row.querySelector(".layers-container");
          },

          run(editor, sender) {
            const lmEl = this.getLayersEl(this.getRowEl(editor));
            lmEl.style.display = "";
          },
          stop(editor, sender) {
            const lmEl = this.getLayersEl(this.getRowEl(editor));
            lmEl.style.display = "none";
          }
        });
        this.editor.Commands.add("show-styles", {
          getRowEl(editor) {
            return editor.getContainer().closest(".editor-row");
          },
          getStyleEl(row) {
            return row.querySelector(".styles-container");
          },

          run(editor, sender) {
            const smEl = this.getStyleEl(this.getRowEl(editor));
            smEl.style.display = "";
          },
          stop(editor, sender) {
            const smEl = this.getStyleEl(this.getRowEl(editor));
            smEl.style.display = "none";
          }
        });
        this.editor.Commands.add("show-traits", {
          getTraitsEl(editor) {
            const row = editor.getContainer().closest(".editor-row");
            return row.querySelector(".traits-container");
          },
          run(editor, sender) {
            this.getTraitsEl(editor).style.display = "";
          },
          stop(editor, sender) {
            this.getTraitsEl(editor).style.display = "none";
          }
        });
        this.editor.Commands.add("set-device-desktop", {
          run: editor => editor.setDevice("Desktop")
        });
        this.editor.Commands.add("set-device-mobile", {
          run: editor => editor.setDevice("Mobile")
        });
        const self = this;
        this.editor.Commands.add("save", {
          run: editor => fetch(
              window.location.protocol +
                "//" +
                window.location.host +
                "/content/post/" +
                self.post.id,
              {
                method: "Put",
                headers: {
                  "Content-Type": "Application/json"
                },
                body: JSON.stringify({
                  html: juice(
                    editor.getHtml() +
                      "<style>" +
                      editor.getCss().replace(/;/g, " !important;") +
                      "</style>"
                  ),
                  css: editor.getCss()
                })
              }
            ).then(console.log)
        });
      });
    }
  },
  name: "editor",
  mounted() {
    console.log("mounting");
  }
};
</script>
 
<style src='../../../../node_modules/grapesjs/dist/css/grapes.min.css'>
</style>

<style>
.panel__devices,
.panel__switcher,
.panel__actions {
  position: initial;
}
.panel__top {
  padding: 0;
  width: 100%;
  display: flex;
  position: initial;
  justify-content: center;
  justify-content: space-between;
}
.panel__basic-actions {
  position: initial;
}
#gjs {
  border: 3px solid #444;
}
.gjs-block {
  width: auto;
  height: auto;
  min-height: auto;
}

/* Reset some default styling */
.gjs-cv-canvas {
  top: 0;
  width: 100%;
  height: 100%;
}
.editor {
  height: 100%;
  padding-bottom: 1rem;
}
.editor-row {
  display: flex;
  justify-content: flex-start;
  align-items: stretch;
  flex-wrap: nowrap;
  height: 300px;
  flex-grow: 1;
}

.editor-canvas {
  flex-grow: 1;
}

.panel__right {
  flex-basis: 230px;
  position: relative;
  overflow-y: auto;
}
.panel__switcher {
  position: initial;
}
#gjs-clm-add-tag svg {
  height: 18px;
  width: 18px;
}

.fa-trash-o::before {
  content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' focusable='false' width='12px' height='12px' style='-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);' preserveAspectRatio='xMidYMid meet' viewBox='0 0 1408 1536'%3E%3Cpath d='M512 608v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23V608q0-14 9-23t23-9h64q14 0 23 9t9 23zm256 0v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23V608q0-14 9-23t23-9h64q14 0 23 9t9 23zm256 0v576q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23V608q0-14 9-23t23-9h64q14 0 23 9t9 23zm128 724V384H256v948q0 22 7 40.5t14.5 27t10.5 8.5h832q3 0 10.5-8.5t14.5-27t7-40.5zM480 256h448l-48-117q-7-9-17-11H546q-10 2-17 11zm928 32v64q0 14-9 23t-23 9h-96v948q0 83-47 143.5t-113 60.5H288q-66 0-113-58.5T128 1336V384H32q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h309l70-167q15-37 54-63t79-26h320q40 0 79 26t54 63l70 167h309q14 0 23 9t9 23z' fill='%23fff'/%3E%3C/svg%3E") !important;
}
.fa-arrows::before {
  content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' aria-hidden='true' focusable='false' width='12px' height='12px' style='-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);' preserveAspectRatio='xMidYMid meet' viewBox='0 0 1792 1792'%3E%3Cpath d='M1792 896q0 26-19 45l-256 256q-19 19-45 19t-45-19t-19-45v-128h-384v384h128q26 0 45 19t19 45t-19 45l-256 256q-19 19-45 19t-45-19l-256-256q-19-19-19-45t19-45t45-19h128v-384H384v128q0 26-19 45t-45 19t-45-19L19 941Q0 922 0 896t19-45l256-256q19-19 45-19t45 19t19 45v128h384V384H640q-26 0-45-19t-19-45t19-45L851 19q19-19 45-19t45 19l256 256q19 19 19 45t-19 45t-45 19h-128v384h384V640q0-26 19-45t45-19t45 19l256 256q19 19 19 45z' fill='white'/%3E%3C/svg%3E") !important;
}
.gjs-clm-tag-status,
.gjs-clm-tag-close {
  min-width: 12px;
  flex-shrink: 1;
  max-width: 12px;
}
</style>