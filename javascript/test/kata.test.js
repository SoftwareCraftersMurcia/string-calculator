const { add } = require("../src/add.fn");

describe("Add function tests", function () {
  it("should return zero when input is empty", function () {
    var result = add("");
    expect(result).toBe(0);
  });

  it("should return a number when a single number string is given", function () {
    var result = add("1");
    expect(result).toBe(1);
  });
});
