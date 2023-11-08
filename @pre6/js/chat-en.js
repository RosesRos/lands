function setDate() {
  const today = new Date();
  let hours = today.getHours();
  let minutes = today.getMinutes();
  hours = hours < 10 ? "0" + hours : hours;
  minutes = minutes < 10 ? "0" + minutes : minutes;
  $(".js_time").text(`${hours}.${minutes}`);
}

let i = 0;
let dialogForm = document.getElementById("form");

const messageLoad = $(".message-loading");

const showImage = () => {
  if (
    $(".js_text").prop("scrollHeight") >= $(".dialog__image").prop("offsetTop")
  ) {
    $(".product__image").addClass("active");
  }
};

async function sendMessage(...arr) {
  const scrollBottom = (id) => {
    const element = $(id);
    const lastElem = $(".js_text").children().last();

    if (
      element.prop("scrollHeight") - $(lastElem).innerHeight() - 100 <=
      element.prop("scrollTop") + element.prop("clientHeight")
    )
      element.animate(
        {
          scrollTop: element.prop("scrollHeight"),
        },
        800
      );
  };

  function loading(d) {
    setTimeout(() => {
      if (d === false) {
      } else {
        $(messageLoad).show();
        $(".js_text").append($(messageLoad));
      }
    }, d);
  }

  function delay(t) {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        resolve($(messageLoad).hide());
      }, t);
    });
  }

  const check = () => {
    return new Promise((resolve) => {
      $(".select__item").on("click", function (e) {
        $(this)
          .css("pointer-events", "none")
          .siblings(".select__item")
          .css("pointer-events", "none");
        $(".js_text").append(
          `<div class="dialog__reply"><div class="current-time current-time-right js_time"></div>${$(
            this
          ).text()}</div>`
        );
        setTimeout(() => {
          $(".dialog__reply").addClass("active");
        }, 100);
        resolve();
      });
    });
  };

  for (let i of arr) {
    showImage();

    await setDate();
    await loading(i.load);
    await delay(i.time);
    let newMessage = `<div class="${i.selectorClass}" style="width:${i.width}px"><div class="current-time current-time-left js_time"></div>${i.text}</div>`;
    if (i.text === undefined) {
    } else {
      $(".js_text").append($(newMessage));
      setTimeout(() => {
        $(".dialog__message").addClass("active");
      }, 100);
    }

    if (i.image === undefined) {
    } else {
      $(".js_text").append(
        $(
          `<img class="dialog__image img-fluid" style="width:${i.width}px" src="${i.image}" alt=""><br>`
        )
      );
      setTimeout(() => {
        $(".dialog__image").addClass("active");
      }, 100);
    }

    if (i.form === undefined) {
    } else {
      $(dialogForm).removeClass("hidden").css("pointer-events", "initial");
      $(".js_text").append(dialogForm);
    }

    if (i.action === undefined) {
    } else {
      let obj = [...i.action];
      const selectItem = (item, width, display) => {
        if (!width) {
          $(".js_text").append(
            `<div class="select__item" style="display:${display}">${item}</div>`
          );
        } else if (!display) {
          $(".js_text").append(
            `<div class="select__item" style = "width:${width}px">${item}</div>`
          );
        } else if (!width && !display) {
          $(".js_text").append(`<div class="select__item">${item}</div>`);
        } else {
          $(".js_text").append(
            `<div class="select__item" style="display:${display}; width:${width}px">${item}</div>`
          );
        }
      };

      for (let x = 0; x < i.action.length; x++) {
        selectItem(obj[x].text, obj[x].width, obj[x].display);
        setTimeout(() => {
          $(".select__item").addClass("active");
        }, 50);
      }
      await check();
    }
    await scrollBottom(".js_text");
  }
}

sendMessage(
  {
    load: 100,
    time: 1500,
    text: "¡Bienvenidos a mi sitio web! Soy Laura Morales y soy especialista en nutrición alimenticia.",
    width: 604,
    selectorClass: "dialog__message",
  },
  {
    load: 100,
    time: 2500,
    text: "La obesidad hoy dia es una enfermedad de estilo de vida, en el mundo moderno se ha vuelto una epidemia, ya que de una forma u otra la padece un tercio de la población mundial.Si necesita saber si tiene sobrepeso y cómo puede sobrellevarlo de manera rápida y efectiva, ¡haga esta prueba!Responda todas las preguntas honestamente y descubrirá en qué forma física se encuentra ahora y qué necesita hacer para mejorar su forma.",
    width: 604,
    selectorClass: "dialog__message",
  },
  {
    load: 100,
    time: 1000,
    text: "¿Alguna vez te han dicho que estás gordo?",
    width: 410,
    selectorClass: "dialog__message",
  },
  {
    load: 0,
    time: 500,
    action: [
      {
        text: "Sí",
      },
      { text: "No" },
      { text: "Casi nunca" },
    ],
  },
  {
    load: 100,
    time: 1000,
    text: "¿Te sientes cómoda en tu cuerpo?",
    width: 332,
    selectorClass: "dialog__message",
  },
  {
    load: 0,
    time: 500,
    action: [
      {
        text: "Sí",
      },
      { text: "No" },
      { text: "No realmente, me gustaría arreglar algo." },
    ],
  },
  {
    load: 100,
    time: 1500,
    text: "¿Te resulta fácil subir escaleras/hacer deporte/correr?",
    width: 514,
    selectorClass: "dialog__message",
  },
  {
    load: 0,
    time: 500,
    action: [
      {
        text: "No, sudo y me canso rápido",
      },
      { text: "A veces es difícil" },
      { text: "¡Sí, es fácil!" },
    ],
  },
  {
    load: 100,
    time: 1500,
    text: "¿Haces ejercicio regularmente?",
    width: 308,
    selectorClass: "dialog__message",
  },
  {
    load: 0,
    time: 500,
    action: [
      {
        text: "Sí",
      },
      { text: "No" },
    ],
  },
  {
    load: 100,
    time: 1500,
    text: "¿Qué sueles hacer en tu tiempo libre?",
    width: 365,
    selectorClass: "dialog__message",
  },
  {
    load: 0,
    time: 500,
    action: [
      {
        text: "voy de compras",
      },
      { text: "me siento en la computadora" },
      { text: "Me acuesto en el sofá, viendo la televisión o leyendo" },
      { text: "camino por la ciudad" },
      { text: "yo hago deportes" },
    ],
  },
  {
    load: 100,
    time: 1500,
    text: "¿Dejas los dulces fácilmente?",
    width: 286,
    selectorClass: "dialog__message",
  },
  {
    load: 0,
    time: 500,
    action: [
      {
        text: "Sí",
      },
      { text: "no" },
    ],
  },
  {
    load: 100,
    time: 1500,
    text: "¿Se siente bien con su dieta actual?",
    width: 344,
    selectorClass: "dialog__message",
  },
  {
    load: 0,
    time: 500,
    action: [
      {
        text: "Sí",
      },
      { text: "no" },
    ],
  },
  {
    load: 100,
    time: 1500,
    text: "¿Siempre sabes el contenido calórico de los alimentos que comes?",
    width: 625,
    selectorClass: "dialog__message",
  },
  {
    load: 0,
    time: 500,
    action: [
      {
        text: "Sí",
      },
      { text: "no" },
    ],
  },
  {
    load: 100,
    time: 1500,
    text: "La última pregunta. ¿Consumes a menudo productos dietéticos?",
    width: 610,
    selectorClass: "dialog__message",
  },
  {
    load: 0,
    time: 500,
    action: [
      {
        text: "Sí",
      },
      { text: "no" },
    ],
  },
  {
    load: 100,
    time: 1500,
    text: "¡Gracias! Tengo que decirte algo.",
    width: 318,
    selectorClass: "dialog__message",
  },
  {
    load: 100,
    time: 1500,
    text:
      "Según sus respuestas, puedo decir que tiene sobrepeso. Pero si aborda este problema correctamente, puede perder fácilmente kilogramos" +
      " adicionales.<br>\n" +
      "Hay muchos componentes efectivos diferentes que ayudan a las personas a perder peso. Entre ellos se encuentran el extracto de pomelo, capsaicina, guaraná y L carnitina. Los considero la mejor combinación para una pérdida de peso efectiva. Déjame decirte por qué.\n",
    width: 604,
    selectorClass: "dialog__message",
  },
  {
    load: 100,
    time: 1500,
    text:
      "<span class='red-text' style='text-decoration: underline'>Extracto de pomelo</span><br>\n" +
      "Acelera el metabolismo;<br>\n" +
      "tiene efecto antioxidante;<br>\n" +
      "normaliza las funciones del sistema digestivo;<br>\n" +
      "activa la excreción de toxinas y colesterol.<br><br>\n" +
      "\n" +
      "<span class='red-text' style='text-decoration: underline'>Capsaicina</span><br>\n" +
      "suprime el apetito;<br>\n" +
      "estimula la tasa de metabolismo interno;<br>\n" +
      "afecta la tasa de oxidación de grasas;<br>\n" +
      "Disminuye la acumulación de grasa en las células.<br><br>\n" +
      "\n" +
      "<span class='red-text' style='text-decoration: underline'>Guaraná</span><br>\n" +
      "proporciona una oleada de fuerza y energía;<br>\n" +
      "aumenta la resistencia;<br>\n" +
      "retrasa la aparición de la fatiga;<br>\n" +
      "estimula el metabolismo.<br><br>\n" +
      "\n" +
      "<span class='red-text' style='text-decoration: underline'>L carnitina</span><br>\n" +
      "tiene un efecto quemagrasas;<br>\n" +
      "aumenta la resistencia;<br>\n" +
      "protege el corazón y los vasos sanguíneos durante el esfuerzo físico.\n",
    width: 604,
    selectorClass: "dialog__message",
  },
  {
    load: 100,
    time: 1500,
    text:
      "Solo hay un producto que tiene cada uno de estos ingredientes. Es un suplemento de <span class='blue-bg'>Flash</span>. Es un suplemento biológico natural" +
      " en" +
      " forma de" +
      " suspensión" +
      " que acelera el metabolismo y hace que tu cuerpo pierda kilos de más.<br>\n" +
      "<span class='blue-bg'>Flash</span> es un suplemento para la pérdida de peso cuidadosamente investigado y probado, funciona rápido, ayudánda a duplicar el resultado de la pérdida de peso y, lo que es más importante, ayuda a quemar más grasa que músculo en el proceso de su transformación.\n",
    width: 604,
    selectorClass: "dialog__message",
  },
  {
    load: 100,
    time: 2000,
    image: "./img/4.png",
    width: 604,
  },
  {
    load: 100,
    time: 1500,
    text:
      "Después de tomar <span class='blue-bg'>Flash</span> durante un mes o más, notará varias cosas:<br>\n" +
      "el exceso de peso disminuirá<br>\n" +
      "el apetito disminuirá significativamente,<br>\n" +
      "el metabolismo se acelerará y la digestión se normalizará.",
    width: 604,
    selectorClass: "dialog__message",
  },
  {
    load: 100,
    time: 1500,
    text: "<img src='./img/7.png' alt='' class='img-fluid' style='margin-bottom: 10px;margin-right:10px'><img src='./img/8.png' alt='' class='img-fluid' style='margin-bottom: 10px;'>",
    width: 604,
    selectorClass: "dialog__message",
  },
  {
    load: 100,
    time: 2000,
    text:
      "¡Buenas noticias! Hoy tenemos una promoción especial, para que puedas pedir Flash con un <span class='red-text font-weight-700'" +
      " style='font-size:32px'>50% de" +
      " descuento</span>. Asegúrese de pedir" +
      " Flash" +
      " ahora" +
      " para ahorrar dinero. ¡Mantente sano!",
    width: 640,
    selectorClass: "dialog__message",
  },
  {
    load: 100,
    time: 1500,
    form: true,
  }
);
