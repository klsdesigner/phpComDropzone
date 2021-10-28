# phpComDropzone

Dropzone é uma biblioteca JavaScript que transforma qualquer elemento HTML em uma dropzone. Isso significa que um usuário pode arrastar e soltar um arquivo e pode tmb usar um CTRL+C (copiar) e CTRL+V (colar) para uma imagem, e o Dropzone exibirá visualizações do arquivo e o andamento do upload, e tratará do upload para você via XHR.

É totalmente configurável, pode ser estilizado de acordo com suas necessidades e milhares de pessoas confiam.

# Para começar

Instalação:
~~~
$ npm install --save dropzone
# ou com yarn:
$ yarn add dropzone
~~~

Ou use os arquivos autônomos como este:

```html
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link
  rel="stylesheet"
  href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css"
  type="text/css"
/>

<div class="my-dropzone"></div>

<script>
  // Dropzone has been added as a global variable.
  const dropzone = new Dropzone("div.my-dropzone", { url: "/file/post" });
</script>
```

---

- [📚 Documentação Completa](https://docs.dropzone.dev)
- [⚙️ `src/options.js`](https://github.com/dropzone/dropzone/blob/main/src/options.js)
  para todas as opções disponíveis

---
