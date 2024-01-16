$(function () {
  let el = document.querySelectorAll(".sameHeight");
  for (let i = 0; i < el.length; i++) {
    let item = $(el)[i],
      width = $(item).outerWidth();
    $(item).css("cssText", `height: calc(${width}px * 0.8)`);
  }
});

/*password-input-show-hide*/
$(function () {
  let showPass = document.querySelectorAll("#showPass");
  for (let i = 0; i < showPass.length; i++) {
    showPass[i].onclick = function (e) {
      if (
        e.target.classList.contains("fa-eye-slash") &&
        e.target.nextElementSibling.type === "password"
      ) {
        e.target.classList.remove("fa-eye-slash");
        e.target.classList.add("fa-eye");
        e.target.nextElementSibling.type = "text";
      } else {
        e.target.classList.add("fa-eye-slash");
        e.target.classList.remove("fa-eye");
        e.target.nextElementSibling.type = "password";
      }
    };
  }
});

/*phone-code-inputs*/
const inputElements = [...document.querySelectorAll("input.code-input")];
inputElements.forEach((ele, index) => {
  ele.addEventListener("keydown", (e) => {
    if (e.keyCode === 8 && e.target.value === "") {
      inputElements[Math.max(0, index - 1)].focus();
    }
    e.target.style.backgroundColor = "#f5f5f5";
  });
  ele.addEventListener("input", (e) => {
    const [first, ...rest] = e.target.value;
    e.target.value = first ?? "";
    if (index !== inputElements.length - 1 && first !== undefined) {
      inputElements[index + 1].focus();
      inputElements[index + 1].value = rest.join("");
      inputElements[index + 1].dispatchEvent(new Event("input"));
    }
  });
});

/*remove-items-from-cart*/
$(function () {
  let itemsParent = document.querySelectorAll("#itemsParent");
  let cartLength = document.querySelectorAll("#cartLength");
  for (let i = 0; i < itemsParent.length; i++) {
    $(cartLength).html($(itemsParent[i]).children("li").length);
    checkParent();
    $(itemsParent[i]).bind("click", (e) => {
      if ($(e.target).hasClass("remove-btn")) {
        $(e.target).parentsUntil("#removeableItem").parent().remove();
        checkParent();
      }
    });
    function checkParent() {
      if ($(itemsParent[i]).children("li").length == 0) {
        $("#cartSummary").css("display", "none");
        $("#slogParent").addClass("col-12");
        $("#slogParent").removeClass("col-lg-8");
        $(cartLength).html($(itemsParent[i]).children("li").length);
        $(itemsParent[i]).css({
          display: "flex",
          "align-items": "center",
          "justify-content": "center",
          flex: 1,
        });
        $(itemsParent[i]).find(".empty-placeholder").show();
        $("#hideEle").hide();
      } else {
        $("#cartSummary").css("display", "unset");
        $("#slogParent").removeClass("col-12");
        $("#slogParent").addClass("col-lg-8");
        $(itemsParent[i]).css({ display: "block" });
        $(itemsParent[i]).find(".empty-placeholder").hide();
        $("#hideEle").show();
      }
    }
  }
});
