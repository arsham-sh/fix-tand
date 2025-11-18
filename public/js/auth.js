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
