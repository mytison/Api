module.exports = async (req, res) => {
  const token = process.env.API_TOKEN; // GitHub Secret से लिया जाएगा
  const redirectUrl = `https://www.google.com/`;
  
  // Redirect करें (302 Temporary)
  res.redirect(302, redirectUrl);
};
