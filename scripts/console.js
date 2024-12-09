class FileSystem {
  constructor() {
    this.root = {
      name: "/",
      type: "dir",
      children: {
        "readme.txt": {
          name: "readme.txt",
          type: "file",
          content: "Добро пожаловать в виртуальную файловую систему!"
        },
        images: {
          name: "images",
          type: "dir",
          children: {
            "Radar_documentation.png": {
              name: "Radar_documentation.png",
              type: "file",
              content: "images/Radar_documentation.png" // Путь к изображению
            }
          }     
        }
      }
    };
    this.currentDir = this.root; // Текущая директория
    this.path = "/"; // Текущий путь
  }
  
  execute(command) {
    const [cmd, ...args] = command.split(" ");
    switch (cmd) {
      case "help":
        return `Список команд:
    - ls: Показать содержимое текущей директории
    - cd [путь]: Перейти в директорию
    - pwd: Показать текущий путь
    - mkdir [имя]: Создать папку
    - touch [имя]: Создать файл
    - cat [имя]: Показать содержимое файла
    - open [имя]: Открыть файл в отдельном блоке
    - help: Показать список команд`;
      case "ls":
        return Object.keys(this.currentDir.children).join(" ") || "Пусто";
      case "pwd":
        return this.path;
      case "mkdir":
        return this.mkdir(args[0]);
      case "touch":
        return this.touch(args[0]);
      case "cat":
        return this.cat(args[0]);
      case "cd":
        return this.cd(args[0]);
      case "open":
        return this.open(args[0]);
      default:
        return `Неизвестная команда: ${cmd}`;
    }
  }

  mkdir(name) {
    if (!name) return "Укажите имя папки.";
    if (this.currentDir.children[name]) return "Уже существует.";
    this.currentDir.children[name] = { name, type: "dir", children: {}, parent: this.currentDir };
    return `Папка "${name}" создана.`;
  }

  touch(name) {
    if (!name) return "Укажите имя файла.";
    if (this.currentDir.children[name]) return "Уже существует.";
    this.currentDir.children[name] = { name, type: "file", content: "" };
    return `Файл "${name}" создан.`;
  }

  cat(name) {
    if (!name) return "Укажите имя файла.";
    const file = this.currentDir.children[name];
    if (!file || file.type !== "file") return "Файл не найден.";

    // Если файл это изображение, возвращаем HTML код для вывода
    if (file.content.match(/\.(jpg|jpeg|png|gif|bmp)$/i)) {
      return `<img src="${file.content}" alt="${name}" style="width: 100%; height: auto;">`;
    }
    // Если это текстовый файл
    return file.content || "(Пусто)";
  }

  open(name) {
    if (!name) return "Укажите имя файла.";
    const file = this.currentDir.children[name];
    if (!file || file.type !== "file") return "Файл не найден.";
    
    displayFile(file); // Отображаем файл в отдельном блоке
    return `Файл "${name}" открыт.`;
  }

  cd(path) {
    if (!path) return "Укажите путь.";
    if (path === "/") {
      this.currentDir = this.root;
      this.path = "/";
      return "Перешли в корневую директорию.";
    }

    const parts = path.split("/");
    let dir = this.currentDir;

    for (const part of parts) {
      if (part === "..") {
        if (dir === this.root) return "Вы уже в корне.";
        dir = dir.parent || this.root;
        continue;
      }
      if (!dir.children[part] || dir.children[part].type !== "dir") return `Нет такой директории: ${part}`;
      dir = dir.children[part];
    }

    this.currentDir = dir;
    this.path = this.buildPath(dir);
    return `Перешли в директорию: ${this.path}`;
  }

  buildPath(dir) {
    if (dir === this.root) return "/";
    let path = [];
    while (dir && dir !== this.root) {
      path.unshift(dir.name);
      dir = dir.parent || this.root;
    }
    return "/" + path.join("/");
  }
}

// Функция для отображения содержимого файла
function displayFile(file) {
  const viewer = document.getElementById("fileViewer");
  const content = document.getElementById("fileContent");

  if (file.content.match(/\.(jpg|jpeg|png|gif|bmp)$/i)) {
    content.innerHTML = `<img src="${file.content}" alt="${file.name}" style="width: 100%; height: auto;">`;
  } else {
    content.innerText = file.content; // Для текстовых файлов
  }

  viewer.style.display = "block"; // Показываем блок
}

document.getElementById("closeViewer").addEventListener("click", () => {
  document.getElementById("fileViewer").style.display = "none"; // Скрываем модальное окно
});

const fs = new FileSystem();
const consoleEl = document.getElementById("console");
const inputEl = document.getElementById("input");

inputEl.addEventListener("keydown", (e) => {
  if (e.key === "Enter") {
    const command = inputEl.value.trim();
    const output = fs.execute(command);
    const result = document.createElement("div");
    result.innerHTML = `<div class="output">$ ${command}</div><div>${output}</div>`;
    consoleEl.appendChild(result);
    consoleEl.scrollTop = consoleEl.scrollHeight;
    inputEl.value = "";
  }
});
