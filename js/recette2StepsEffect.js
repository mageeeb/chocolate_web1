document.addEventListener("DOMContentLoaded", function () {
    const steps = document.querySelectorAll(".list-group-numbered .list-group-item");

    steps.forEach(step => {
        step.addEventListener("click", function () {
            if (this.classList.contains("done")) {
                this.classList.remove("done");
                this.style.backgroundColor = "";
                this.style.color = "";
                this.style.textAlign = "";
                const check = this.querySelector("span.checkmark");
                if (check) check.remove();
            } else {
                this.classList.add("done");
                this.style.backgroundColor = "green";
                this.style.color = "gold";
                this.style.textAlign = "right";

                const check = document.createElement("span");
                check.textContent = " ✔";
                check.classList.add("checkmark");
                check.style.color = "gold";
                check.style.fontWeight = "bold";
                this.appendChild(check);
            }
        });
    });
});
