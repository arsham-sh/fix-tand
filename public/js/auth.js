class OTPComponent {
    constructor(container) {
    this.container = container;
    this.digits = parseInt(container.dataset.digits) || 4;
    this.form = container.querySelector('.otp-form');
    this.inputContainer = this.form.querySelector('.flex');
    this.submitBtn = this.form.querySelector('.otp-submit');
    
    this.inputs = [];
    this.init();
    }

    init() {
    this.createInputs();
    this.bindEvents();
    }

    createInputs() {
        for (let i = 0; i < this.digits; i++) {
            const input = document.createElement('input');
            input.type = 'text';
            input.maxLength = 1;
            input.pattern = '\\d*';
            
            // کلاس‌های بهبودیافته
            input.className = `
            w-14 h-14 text-center text-2xl font-DanaBlack text-gray-700 
            bg-gray-100 rounded-lg p-4 outline-none
            focus:bg-white focus:border-original-red focus:ring-2 focus:ring-original-red
            transition-all duration-150
            `.replace(/\s+/g, ' ').trim();

            input.dataset.index = i;
            this.inputContainer.appendChild(input);
            this.inputs.push(input);
        }
    }

    bindEvents() {
        this.inputs.forEach((input, index) => {
            input.addEventListener('input', (e) => this.handleInput(e, index));
            input.addEventListener('keydown', (e) => this.handleKeyDown(e, index));
            input.addEventListener('focus', () => input.select());
            input.addEventListener('paste', (e) => this.handlePaste(e));
        });

        this.form.addEventListener('submit', (e) => {
            e.preventDefault();
            const code = this.getCode();
            if (code.length === this.digits) {
            alert(`کد وارد شده: ${code}`);
            // اینجا می‌تونی API کال کنی
            }
        });
    }

    handleInput(e, index) {
    const value = e.target.value;
    if (/^\d$/.test(value)) {
        if (index < this.digits - 1) {
        this.inputs[index + 1].focus();
        } else {
        this.submitBtn.focus();
        }
    } else {
        e.target.value = '';
    }
    this.updateSubmitButton();
    }

    handleKeyDown(e, index) {
        if (e.key === 'Backspace' || e.key === 'Delete') {
            if (!e.target.value && index > 0) {
            this.inputs[index - 1].value = '';
            this.inputs[index - 1].focus();
            } else if (e.target.value) {
            e.target.value = '';
            }
            e.preventDefault();
        } else if (e.key === 'ArrowLeft' && index > 0) {
            this.inputs[index - 1].focus();
            e.preventDefault();
        } else if (e.key === 'ArrowRight' && index < this.digits - 1) {
            this.inputs[index + 1].focus();
            e.preventDefault();
        } else if (!/^\d$/.test(e.key) && e.key !== 'Tab') {
            e.preventDefault();
        }
        this.updateSubmitButton();
    }

    handlePaste(e) {
        e.preventDefault();
        const paste = (e.clipboardData || window.clipboardData).getData('text').replace(/\D/g, '');
        if (paste.length >= this.digits) {
            const digits = paste.slice(0, this.digits).split('');
            this.inputs.forEach((input, i) => {
            input.value = digits[i] || '';
            });
            this.submitBtn.focus();
        }
        this.updateSubmitButton();
    }

    getCode() {
        return this.inputs.map(i => i.value).join('');
    }
    updateSubmitButton() {
        const filled = this.inputs.every(i => i.value);
        this.submitBtn.disabled = !filled;
    }
}

// فعال‌سازی خودکار همه کامپوننت‌های OTP
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.otp-container').forEach(container => {
    new OTPComponent(container);
    });
});




// ================= REGISTER FORM VALIDATION (REAL-TIME + SAFE SUBMIT) =================
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("registerForm");
  if (!form) return;

  const fieldNames = ["username", "phone", "email", "password", "confirm-password"];
  const fields = Object.fromEntries(fieldNames.map((name) => [name, form.querySelector(`#${name}`)]));
  const errors = Object.fromEntries(fieldNames.map((name) => [name, form.querySelector(`#${toErrorId(name)}`)]));

  function toErrorId(fieldId) {
    return fieldId.replace("-", "") + "Error";
  }

  const utils = {
    isEmpty: (v) => !v || v.trim() === "",
    isEmail: (v) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v),
    isPhone: (v) => /^09\d{9}$/.test(v),
    debounce(fn, delay = 400) {
      let timeout;
      return (...args) => {
        clearTimeout(timeout);
        timeout = setTimeout(() => fn(...args), delay);
      };
    },
  };

  const ui = {
    setError: (field, message) => {
      const span = errors[field];
      if (!span) return;
      span.textContent = message;
      span.classList.remove("hidden");
    },
    clearError: (field) => {
      const span = errors[field];
      if (!span) return;
      span.textContent = "";
      span.classList.add("hidden");
    },
  };

  function validateField(field, value, allData) {
    switch (field) {
      case "username":
        if (utils.isEmpty(value)) return "نام کاربری الزامی است.";
        if (value.length < 3) return "نام کاربری باید حداقل ۳ کاراکتر باشد.";
        break;

      case "phone":
        if (utils.isEmpty(value)) return "شماره موبایل الزامی است.";
        if (!utils.isPhone(value)) return "شماره موبایل معتبر نیست (مثلاً 09123456789).";
        break;

      case "email":
        if (!utils.isEmpty(value) && !utils.isEmail(value))
          return "فرمت ایمیل معتبر نیست.";
        break;

      case "password":
        if (utils.isEmpty(value)) return "رمز عبور الزامی است.";
        if (value.length < 6) return "رمز عبور باید حداقل ۶ کاراکتر باشد.";
        if (!/[A-Z]/.test(value)) return "رمز عبور باید حداقل یک حرف بزرگ داشته باشد.";
        if (!/[a-z]/.test(value)) return "رمز عبور باید حداقل یک حرف کوچک داشته باشد.";
        if (!/[0-9]/.test(value)) return "رمز عبور باید حداقل یک عدد داشته باشد.";
        break;

      case "confirm-password":
        if (value !== allData.password) return "رمز عبور و تکرار آن مطابقت ندارند.";
        break;
    }
    return null;
  }

  function validateAll() {
    const data = Object.fromEntries(fieldNames.map((f) => [f, fields[f]?.value.trim() ?? ""]));
    const messages = {};
    for (const field of fieldNames) {
      const msg = validateField(field, data[field], data);
      if (msg) messages[field] = msg;
    }
    return messages;
  }

  // ✅ Real-time validation
  const validateFieldRealtime = utils.debounce((fieldName) => {
    const data = Object.fromEntries(fieldNames.map((f) => [f, fields[f]?.value.trim() ?? ""]));
    const msg = validateField(fieldName, data[fieldName], data);
    if (msg) ui.setError(fieldName, msg);
    else ui.clearError(fieldName);
  });

  fieldNames.forEach((name) => {
    const input = fields[name];
    if (!input) return;
    input.addEventListener("input", () => validateFieldRealtime(name));
  });

  // ✅ Final submit validation
  form.addEventListener("submit", (e) => {
    fieldNames.forEach(ui.clearError);
    const messages = validateAll();
    const invalidFields = Object.keys(messages);

    if (invalidFields.length > 0) {
      e.preventDefault(); // جلوی ارسال رو بگیر تا خطا اصلاح بشه
      invalidFields.forEach((f) => ui.setError(f, messages[f]));
      fields[invalidFields[0]]?.focus();
      return;
    }

    // ✅ فرم معتبر است، پس اجازه ارسال داده می‌شود
    // در این نقطه فرم به طور طبیعی (action + method) ارسال می‌شود
  });
});
// ================= END REGISTER FORM VALIDATION =================





// ================= LOGIN FORM VALIDATION (REAL-TIME + SAFE SUBMIT) =================
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("loginForm");
  if (!form) return;

  const phoneInput = form.querySelector("#phone");
  const errorSpan = form.querySelector("#phoneError");

  const utils = {
    isEmpty: (v) => !v || v.trim() === "",
    isPhone: (v) => /^09\d{9}$/.test(v),
    debounce(fn, delay = 400) {
      let timeout;
      return (...args) => {
        clearTimeout(timeout);
        timeout = setTimeout(() => fn(...args), delay);
      };
    },
  };

  const ui = {
    showError: (msg) => {
      errorSpan.textContent = msg;
      errorSpan.classList.remove("hidden", "opacity-0");
      errorSpan.classList.add("opacity-100");
    },
    hideError: () => {
      errorSpan.classList.add("opacity-0");
      setTimeout(() => errorSpan.classList.add("hidden"), 300);
    },
  };

  function validatePhone(value) {
    if (utils.isEmpty(value)) return "شماره موبایل الزامی است.";
    if (!utils.isPhone(value)) return "شماره موبایل معتبر نیست (مثلاً 09123456789).";
    return null;
  }

  const validateRealtime = utils.debounce(() => {
    const msg = validatePhone(phoneInput.value.trim());
    msg ? ui.showError(msg) : ui.hideError();
  });

  phoneInput.addEventListener("input", validateRealtime);

  form.addEventListener("submit", (e) => {
    const msg = validatePhone(phoneInput.value.trim());
    if (msg) {
      e.preventDefault();
      ui.showError(msg);
      phoneInput.focus();
      return;
    }

    ui.hideError();
  });
});
// ================= END LOGIN FORM VALIDATION =================

