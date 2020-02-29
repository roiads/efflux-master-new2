<template>
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive p-0">
              <div class="panel__top">
                  <div class="panel__basic-actions"></div>
              </div>
              <div class="editor-row">
                <div class="editor-canvas">
                  <div id="gjs">
                    <div class="container">
                      <div class="jumbotron bg-dark text-light">
                        <h3>Hello!</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel__right">
                  <div class="layers-container"></div>
                </div>
              </div>
              <div id="blocks"></div>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    mounted() {

      const editor = grapesjs.init({
        container: '#gjs',
        fromElement: true,
        height: '100%',
        width: 'auto',
        storageManager: false,
        layerManager: {
          appendTo: '.layers-container'
        },
        panels: {
          defaults: [{
            id: 'layers',
            el: '.panel__right',
            resizable: {
              maxDim: 350,
              minDim: 200,
              tc: 0, // Top handler
              cl: 1, // Left handler
              cr: 0, // Right handler
              bc: 0, // Bottom handler
              keyWidth: 'flex-basis',
            },
          }]
        },
        blockManager: {
          appendTo: '#blocks',
          blocks: [
            {
              id: 'section', // id is mandatory
              label: '<b>Section</b>', // You can use HTML/SVG inside labels
              attributes: { class:'gjs-block-section' },
              content: `<section>
                <h1>This is a simple title</h1>
                <div>This is just a Lorem text: Lorem ipsum dolor sit amet</div>
              </section>`,
            }, {
              id: 'text',
              label: 'Text',
              content: '<div data-gjs-type="text">Insert your text here</div>',
            }, {
              id: 'image',
              label: 'Image',
              select: true,
              content: { type: 'image' },
              activate: true,
            }
          ]
        }

      });
      editor.Panels.addPanel({
        id: 'panel-top',
        el: '.panel__top',
      });
      editor.Panels.addPanel({
        id: 'basic-actions',
        el: '.panel__basic-actions',
        buttons: [
          {
            id: 'visibility',
            active: true, 
            className: 'btn-toggle-borders',
            label: '<u>B</u>',
            command: 'sw-visibility', 
          }, {
            id: 'export',
            className: 'btn-open-export',
            label: 'Exp',
            command: 'export-template',
            context: 'export-template',
          }, {
            id: 'show-json',
            className: 'btn-show-json',
            label: 'JSON',
            context: 'show-json',
            command(editor) {
              editor.Modal.setTitle('Components JSON')
                .setContent(`<textarea style="width:100%; height: 250px;">
                  ${JSON.stringify(editor.getComponents())}
                </textarea>`)
                .open();
            },
          }
        ],
      });
    }
}
</script>